<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITS TAMBAYAN</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .comment-content {
            max-height: 350px;
            overflow-y: auto;
        }
    </style>

<body style="background-color: #13253d; position: fixed;">
    <canvas id="canvas"></canvas>
    <div class="container p-5" id="container">
        <div class="row mx-auto justify-content-center">

            <div class="col-7">

                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <div class="card-content">
                            <p>{{ $post->caption }}</p>

                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                                        <img src="{{ $user->image }}" alt="image"
                                            style="width:2rem; height:2rem; border-radius:100%;">


                                        <small style="font-size: 0.2;">{{ $user->firs_name }}
                                            {{ $user->last_name }}</small>
                                    </a>
                                </div>
                                <div>
                                    <small style="font-size: 10px;">{{ $post->created_at }}</small>
                                </div>



                            </div>

                            <a href="#" id="pop">
                                <img id="imageresource" class="img-thumbnail" src="{{ $post->image }}" alt="image">
                            </a>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-4">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="">Comments</h1>
                        </div>
                        <div class="card-content comment-content">
                            @foreach ($comments as $comment)
                                <div class="comment py-4 border-bottom border-dark">
                                    <p>{{ $comment->comment }}</p>
                                    <img class="img-thumbnail" src="{{ $comment->image }}" alt="image">
                                    <div class="d-flex justify-content-end">
                                        <small style="font-size: 10px;">{{ $comment->created_at }}</small>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                        <form class="py-4" method="POST" action="{{ route('sendComment') }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <input type="text" name="user_id" value="1" hidden>
                            <input type="text" name="posts_id" value="{{ $post->id }}" hidden>

                            <div class="input-group mb-3">

                                <input type="text" name="comment" class="form-control" placeholder="Comment...."
                                    aria-label="comment" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit"
                                    id="button-addon2">Send</button>
                            </div>
                            <input type="file" name="image">


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" aria-hidden="true">
            <div class="modal-content bg-success bg-opacity-10" aria-hidden="true">
                <div class="modal-body d-flex justify-content-center" aria-hidden="true">
                    <img src="" id="imagepreview" style="width: 700px; height: 600px;">
                </div>
            </div>
        </div>
    </div>

    <script>
        window.requestAnimFrame = function() {
            return (
                window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback) {
                    window.setTimeout(callback);
                }
            );
        };

        function init(elemid) {
            let canvas = document.getElementById(elemid),
                c = canvas.getContext("2d"),
                w = (canvas.width = window.innerWidth),
                h = (canvas.height = window.innerHeight);
            c.fillStyle = "rgba(30,30,30,1)";
            c.fillRect(0, 0, w, h);
            return {
                c: c,
                canvas: canvas
            };
        }

        window.onload = function() {
            let c = init("canvas").c,
                canvas = init("canvas").canvas,
                w = (canvas.width = window.innerWidth),
                h = (canvas.height = window.innerHeight),
                mouse = {
                    x: false,
                    y: false
                },
                last_mouse = {};

            function dist(p1x, p1y, p2x, p2y) {
                return Math.sqrt(Math.pow(p2x - p1x, 2) + Math.pow(p2y - p1y, 2));
            }

            class segment {
                constructor(parent, l, a, first) {
                    this.first = first;
                    if (first) {
                        this.pos = {
                            x: parent.x,
                            y: parent.y
                        };
                    } else {
                        this.pos = {
                            x: parent.nextPos.x,
                            y: parent.nextPos.y
                        };
                    }
                    this.l = l;
                    this.ang = a;
                    this.nextPos = {
                        x: this.pos.x + this.l * Math.cos(this.ang),
                        y: this.pos.y + this.l * Math.sin(this.ang)
                    };
                }
                update(t) {
                    this.ang = Math.atan2(t.y - this.pos.y, t.x - this.pos.x);
                    this.pos.x = t.x + this.l * Math.cos(this.ang - Math.PI);
                    this.pos.y = t.y + this.l * Math.sin(this.ang - Math.PI);
                    this.nextPos.x = this.pos.x + this.l * Math.cos(this.ang);
                    this.nextPos.y = this.pos.y + this.l * Math.sin(this.ang);
                }
                fallback(t) {
                    this.pos.x = t.x;
                    this.pos.y = t.y;
                    this.nextPos.x = this.pos.x + this.l * Math.cos(this.ang);
                    this.nextPos.y = this.pos.y + this.l * Math.sin(this.ang);
                }
                show() {
                    c.lineTo(this.nextPos.x, this.nextPos.y);
                }
            }

            class tentacle {
                constructor(x, y, l, n, a) {
                    this.x = x;
                    this.y = y;
                    this.l = l;
                    this.n = n;
                    this.t = {};
                    this.rand = Math.random();
                    this.segments = [new segment(this, this.l / this.n, 0, true)];
                    for (let i = 1; i < this.n; i++) {
                        this.segments.push(
                            new segment(this.segments[i - 1], this.l / this.n, 0, false)
                        );
                    }
                }
                move(last_target, target) {
                    this.angle = Math.atan2(target.y - this.y, target.x - this.x);
                    this.dt = dist(last_target.x, last_target.y, target.x, target.y) + 5;
                    this.t = {
                        x: target.x - 0.8 * this.dt * Math.cos(this.angle),
                        y: target.y - 0.8 * this.dt * Math.sin(this.angle)
                    };
                    if (this.t.x) {
                        this.segments[this.n - 1].update(this.t);
                    } else {
                        this.segments[this.n - 1].update(target);
                    }
                    for (let i = this.n - 2; i >= 0; i--) {
                        this.segments[i].update(this.segments[i + 1].pos);
                    }
                    if (
                        dist(this.x, this.y, target.x, target.y) <=
                        this.l + dist(last_target.x, last_target.y, target.x, target.y)
                    ) {
                        this.segments[0].fallback({
                            x: this.x,
                            y: this.y
                        });
                        for (let i = 1; i < this.n; i++) {
                            this.segments[i].fallback(this.segments[i - 1].nextPos);
                        }
                    }
                }
                show(target) {
                    if (dist(this.x, this.y, target.x, target.y) <= this.l) {
                        c.globalCompositeOperation = "lighter";
                        c.beginPath();
                        c.lineTo(this.x, this.y);
                        for (let i = 0; i < this.n; i++) {
                            this.segments[i].show();
                        }
                        c.strokeStyle =
                            "hsl(" +
                            (this.rand * 60 + 180) +
                            ",100%," +
                            (this.rand * 60 + 25) +
                            "%)";
                        c.lineWidth = this.rand * 2;
                        c.lineCap = "round";
                        c.lineJoin = "round";
                        c.stroke();
                        c.globalCompositeOperation = "source-over";
                    }
                }
                show2(target) {
                    c.beginPath();
                    if (dist(this.x, this.y, target.x, target.y) <= this.l) {
                        c.arc(this.x, this.y, 2 * this.rand + 1, 0, 2 * Math.PI);
                        c.fillStyle = "white";
                    } else {
                        c.arc(this.x, this.y, this.rand * 2, 0, 2 * Math.PI);
                        c.fillStyle = "darkcyan";
                    }
                    c.fill();
                }
            }

            let maxl = 300,
                minl = 50,
                n = 30,
                numt = 500,
                tent = [],
                clicked = false,
                target = {
                    x: 0,
                    y: 0
                },
                last_target = {},
                t = 0,
                q = 10;

            for (let i = 0; i < numt; i++) {
                tent.push(
                    new tentacle(
                        Math.random() * w,
                        Math.random() * h,
                        Math.random() * (maxl - minl) + minl,
                        n,
                        Math.random() * 2 * Math.PI
                    )
                );
            }

            function draw() {
                if (mouse.x) {
                    target.errx = mouse.x - target.x;
                    target.erry = mouse.y - target.y;
                } else {
                    target.errx =
                        w / 2 +
                        ((h / 2 - q) * Math.sqrt(2) * Math.cos(t)) /
                        (Math.pow(Math.sin(t), 2) + 1) -
                        target.x;
                    target.erry =
                        h / 2 +
                        ((h / 2 - q) * Math.sqrt(2) * Math.cos(t) * Math.sin(t)) /
                        (Math.pow(Math.sin(t), 2) + 1) -
                        target.y;
                }

                target.x += target.errx / 10;
                target.y += target.erry / 10;

                t += 0.01;

                c.beginPath();
                c.arc(
                    target.x,
                    target.y,
                    dist(last_target.x, last_target.y, target.x, target.y) + 5,
                    0,
                    2 * Math.PI
                );
                c.fillStyle = "hsl(210,100%,80%)";
                c.fill();

                for (i = 0; i < numt; i++) {
                    tent[i].move(last_target, target);
                    tent[i].show2(target);
                }
                for (i = 0; i < numt; i++) {
                    tent[i].show(target);
                }
                last_target.x = target.x;
                last_target.y = target.y;
            }

            canvas.addEventListener(
                "mousemove",
                function(e) {
                    last_mouse.x = mouse.x;
                    last_mouse.y = mouse.y;

                    mouse.x = e.pageX - this.offsetLeft;
                    mouse.y = e.pageY - this.offsetTop;
                },
                false
            );

            canvas.addEventListener("mouseleave", function(e) {
                mouse.x = false;
                mouse.y = false;
            });

            canvas.addEventListener(
                "mousedown",
                function(e) {
                    clicked = true;
                },
                false
            );

            canvas.addEventListener(
                "mouseup",
                function(e) {
                    clicked = false;
                },
                false
            );

            function loop() {
                window.requestAnimFrame(loop);
                c.clearRect(0, 0, w, h);
                draw();
            }

            window.addEventListener("resize", function() {
                (w = canvas.width = window.innerWidth),
                (h = canvas.height = window.innerHeight);
                loop();
            });

            loop();
            setInterval(loop, 1000 / 60);
        };
    </script>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $("#pop").on("click", function() {
            $('#imagepreview').attr('src', $('#imageresource').attr('src'));
            $('#imagemodal').modal('show');
        });
    </script>
</body>

</html>
