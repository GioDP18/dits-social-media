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
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    body::-webkit-scrollbar {
        display: none;
    }

    .cssbuttons-io-button {
        display: flex;
        align-items: center;
        font-family: inherit;
        font-weight: 500;
        font-size: 14px;
        padding: 0.8em 1.5em 0.8em 1.2em;
        color: white;
        background: #ad5389;
        background: linear-gradient(0deg, #12243B 0%, rgba(132, 116, 254, 1) 100%);
        border: none;
        box-shadow: 0 0.7em 1.5em -0.5em #4d36d0be;
        letter-spacing: 0.05em;
        border-radius: 20em;
    }

    .cssbuttons-io-button:hover {
        box-shadow: 0 0.5em 1.5em -0.5em #4d36d0be;
    }

    .cssbuttons-io-button:active {
        box-shadow: 0 0.3em 1em -0.5em #4d36d0be;
    }

    .comments-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        outline: none;
        cursor: pointer;
        width: 150px;
        height: 50px;
        background-image: linear-gradient(to top, #D8D9DB 0%, #fff 80%, #FDFDFD 100%);
        border-radius: 30px;
        border: 1px solid #8F9092;
        transition: all 0.2s ease;
        font-family: "Source Sans Pro", sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: #606060;
        text-shadow: 0 1px #fff;
    }

    .comments-btn:hover {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 3px 3px #CECFD1;
    }

    .comments-btn:active {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
    }

    .comments-btn:focus {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #D6D7D9, 0 -4px 4px #CECFD1, 0 -6px 4px #FEFEFE, inset 0 0 5px 3px #999, inset 0 0 30px #aaa;
    }
</style>

<body style="background-color:#13253D;">
    {{-- Check errors for uploading posts --}}
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {{-- Start you div here --}}
    <div
        style="position:fixed; z-index:1; width:100%; background-color:white; top:0; padding:.5rem 1rem; box-shadow: 5px 3px 4px #818181; display:flex; justify-content:space-between; align-items:center;">
        <div class="d-flex" style="gap:.5rem;">
            <img src="{{ asset('logo/dits.png') }}" alt=""
                style="width:3rem; height:3rem; border-radius:5px; box-shadow: 5px 3px 4px #818181;">
            <h1 style="font-weight:bold; text-shadow: 5px 5px 4px #818181;">DITS SOCIAL MEDIA</h1>
        </div>
        <div style="display:flex; gap:.5rem;">
            <div>
                <h5 style="color:#13253D;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
            </div>
            <div style="position:relative; cursor:pointer;" onclick="triggerProfileOptions()">
                <img src="{{ asset('storage/profile_images/' . Auth::user()->image) }}" alt=""
                    style="border-radius:50%; width:2rem; height:2rem;">
                <div id="profileOptions"
                    style="display:none; position:absolute; background-color:gray; top:3rem; right:0; width:7rem; color:white; padding:0 .5rem; border-radius:10px;">
                    <div
                        style="position:absolute; background-color:gray; width:1rem; height:1rem; top:-.5rem; right:.7rem; transform:rotate(135deg)">
                    </div>
                    <li style="list-style:none; padding:.5rem;"><i class="fa-solid fa-user"></i> <a
                            href="{{ route('update', Auth::user()->id) }}"
                            style="text-decoration:none; color:white;">Profile</a></li>
                    <hr class="m-0">
                    <li style="list-style:none; padding:.5rem;">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            @method('POST')
                            <button type="submit"
                                style="background-color:transparent; border:none; color:white; display:flex; gap:5px; text-align:right; align-items:center;"><i
                                    class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                    </li>
                </div>
            </div>
        </div>
    </div>

        <div style="height:5rem;" id="add"></div>
        <div style="margin:1rem 1rem;">
            {{-- All Buttons here --}}
            <!-- Button for Adding New Post -->
            <button ype="button" class="cssbuttons-io-button" data-bs-toggle="modal" data-bs-target="#addPost">
                <span>Add New Post</span>
            </button>
        </div>
        <canvas id="canvas">
        <div class="posts-div" style="display:flex; justify-content:center; flex-direction:column; margin-bottom:1rem;">
            @foreach ($posts as $post)
                <div class="each-post"
                    style="background-color:white; box-shadow: 5px 3px 4px #818181; width:90%; margin:auto; margin-top:1rem; border-radius:15px;">
                    <div class="uploader d-flex p-3 pb-0" style="align-items:center; gap:.8rem;">
                        <img src="{{ $post->image }}" alt=""
                            style="border-radius:50%; width:2.2rem; height:2.2rem;">
                        <div style="display:flex; flex-direction:column">
                            <span style="font-weight:bold; font-size:1.2rem;">{{ $post->users->first_name }}
                                {{ $post->users->last_name }}</span>
                            <small style="font-size:.8rem;"><i class="fa-solid fa-clock"></i>
                                {{ $post->created_at->format('g:ia F j, Y') }}</small>
                        </div>
                    </div>
                    <hr style="width:95%; margin:1rem auto">
                    <div class="images" style="margin:0 1rem;">
                        <p style="margin:0 1rem;">{{ $post->caption }}</p>
                        <img src="{{ asset('storage/' . $post->image) }}" alt="" style="width:20rem;">
                    </div>
                    <div class="comments m-3 d-flex" style="justify-content:end; gap:1rem;">
                        <button class="comments-btn" onclick="location.href='/comments/{{ $post->id }}'"><i
                                class="fa-solid fa-heart" style="color:red"></i> <span style="width:.3rem;"></span>
                            Likes:
                            {{ $post->likes_count }} </button>
                        <button class="comments-btn" onclick="location.href='/comments/{{ $post->id }}'"><i
                                class="fa-solid fa-comment"></i> <span style="width:.3rem;"></span> Comments:
                            {{ $post->comments_count }}</button>
                    </div>
                </div>
            @endforeach
            <div
                style="position: fixed; display:flex; justify-content:center; align-items:center; background-color:#6B63D3; border-radius:5px; bottom: 3rem; right: 3.2rem; width: 2rem; height: 2rem; transform: rotate(45deg);">
                <a href="#add" style="scroll-behavior:smooth;"><i class="fa-solid fa-arrow-up"
                        style="transform:rotate(-45deg); color:white;"></i></a>
            </div>
        </div>
    </canvas>
    <div>
        {{-- All Modal Here --}}
        <!-- Modal for Adding New Post -->
        <div class="modal fade" id="addPost" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/uploadPost" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
                    @csrf
                    @method('POST')
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i>
                                Create New Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="caption" class="form-label" style="font-weight:bold">Caption</label>
                                <textarea class="form-control" name="caption" id="caption" rows="2" placeholder="What do you think?"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label" style="font-weight:bold">Upload
                                    Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/jpeg, image/png, image/jpg, image/gif" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" name="upload" class="btn btn-primary">Upload</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function triggerProfileOptions() {
            var profileOptions = document.querySelector('#profileOptions');
            if (profileOptions.style.display == "none") {
                profileOptions.style.display = 'block';
            } else {
                profileOptions.style.display = 'none';
            }

        }

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
</body>

</html>
