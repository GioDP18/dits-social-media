<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DITS TAMBAYAN</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        color: #797979;
        background: #13253d;
        font-family: 'Open Sans', sans-serif;
        padding: 0px !important;
        margin: 0px !important;
        font-size: 13px;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        -moz-font-smoothing: antialiased;
    }

    .profile-nav,
    .profile-info {
        margin-top: 30px;
        position: fixed;
    }

    .profile-nav .user-heading {
        background: #fbc02d;
        color: #fff;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        padding: 30px;
        text-align: center;
    }

    .profile-nav .user-heading.round a {
        border-radius: 50%;
        -webkit-border-radius: 50%;
        border: 10px solid rgba(255, 255, 255, 0.3);
        display: inline-block;
    }

    .profile-nav .user-heading a img {
        width: 112px;
        height: 112px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
    }

    .profile-nav .user-heading h1 {
        font-size: 22px;
        font-weight: 300;
        margin-bottom: 5px;
    }

    .profile-nav .user-heading p {
        font-size: 12px;
    }



    .r-activity {
        margin: 6px 0 0;
        font-size: 12px;
    }


    .p-text-area,
    .p-text-area:focus {
        border: none;
        font-weight: 300;
        box-shadow: none;
        color: #c3c3c3;
        font-size: 16px;
    }

    .profile-info .card-footer {
        background-color: #f8f7f5;
        border-top: 1px solid #e7ebee;
    }

    .profile-info .card-footer ul li a {
        color: #7a7a7a;
    }


    .file-pos {
        margin: 6px 0 10px 0;
    }

    .profile-activity h5 {
        font-weight: 300;
        margin-top: 0;
        color: #c3c3c3;
    }

    .summary-head {
        background: #ee7272;
        color: #fff;
        text-align: center;
        border-bottom: 1px solid #ee7272;
    }

    .summary-head h4 {
        font-weight: 300;
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .summary-head p {
        color: rgba(255, 255, 255, 0.6);
    }

    ul.summary-list {
        display: inline-block;
        padding-left: 0;
        width: 100%;
        margin-bottom: 0;
    }

    ul.summary-list>li {
        display: inline-block;
        width: 19.5%;
        text-align: center;
    }

    ul.summary-list>li>a>i {
        display: block;
        font-size: 18px;
        padding-bottom: 5px;
    }

    ul.summary-list>li>a {
        padding: 10px 0;
        display: inline-block;
        color: #818181;
    }

    ul.summary-list>li {
        border-right: 1px solid #eaeaea;
    }

    ul.summary-list>li:last-child {
        border-right: none;
    }

    .activity {
        width: 100%;
        float: left;
        margin-bottom: 10px;
    }

    .activity.alt {
        width: 100%;
        float: right;
        margin-bottom: 10px;
    }

    .activity span {
        float: left;
    }

    .activity.alt span {
        float: right;
    }

    .activity span,
    .activity.alt span {
        width: 45px;
        height: 45px;
        line-height: 45px;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        background: #eee;
        text-align: center;
        color: #fff;
        font-size: 16px;
    }

    .activity.terques span {
        background: #8dd7d6;
    }

    .activity.terques h4 {
        color: #8dd7d6;
    }

    .activity.purple span {
        background: #b984dc;
    }

    .activity.purple h4 {
        color: #b984dc;
    }

    .activity.blue span {
        background: #90b4e6;
    }

    .activity.blue h4 {
        color: #90b4e6;
    }

    .activity.green span {
        background: #aec785;
    }

    .activity.green h4 {
        color: #aec785;
    }

    .activity h4 {
        margin-top: 0;
        font-size: 16px;
    }

    .activity p {
        margin-bottom: 0;
        font-size: 13px;
    }

    .activity .activity-desk i,
    .activity.alt .activity-desk i {
        float: left;
        font-size: 18px;
        margin-right: 10px;
        color: #bebebe;
    }

    .activity .activity-desk {
        margin-left: 70px;
        position: relative;
    }

    .activity.alt .activity-desk {
        margin-right: 70px;
        position: relative;
    }

    .activity.alt .activity-desk .card {
        float: right;
        position: relative;
    }

    .activity-desk .card {
        background: #F4F4F4;
        display: inline-block;
    }


    .activity .activity-desk .arrow {
        border-right: 8px solid #F4F4F4 !important;
    }

    .activity .activity-desk .arrow {
        border-bottom: 8px solid transparent;
        border-top: 8px solid transparent;
        display: block;
        height: 0;
        left: -7px;
        position: absolute;
        top: 13px;
        width: 0;
    }

    .activity-desk .arrow-alt {
        border-left: 8px solid #F4F4F4 !important;
    }

    .activity-desk .arrow-alt {
        border-bottom: 8px solid transparent;
        border-top: 8px solid transparent;
        display: block;
        height: 0;
        right: -7px;
        position: absolute;
        top: 13px;
        width: 0;
    }

    .activity-desk .album {
        display: inline-block;
        margin-top: 10px;
    }

    .activity-desk .album a {
        margin-right: 10px;
    }

    .activity-desk .album a:last-child {
        margin-right: 0px;
    }
</style>

<body>
    <canvas id="canvas"></canvas>
    <div class="container bootstrap snippets bootdey">
        <div class="row">
            <div class="profile-nav col-md-3">
                <div class="card">
                    <div class="user-heading round">
                        <a href="#">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                        </a>
                        <h1>Camila Smith</h1>
                        <p>deydey@theEmail.com</p>
                    </div>

                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item active"><a class="nav-link active" href="#"> <i
                                    class=" fa fa-user"></i> Profile</a></li>

                        <li class="nav-item "><a class="nav-link" href="#"> <i class="fa fa-edit"></i> Posts</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="profile-info col-md-9">
                <div class="card">
                    <form>
                        <textarea placeholder="Whats in your mind today?" rows="2" class="form-control input-lg p-text-area"></textarea>
                    </form>
                    <footer class="card-footer">
                        <button class="btn btn-warning pull-right">Post</button>
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-camera"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class=" fa fa-film"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-microphone"></i></a>
                            </li>
                        </ul>
                    </footer>
                </div>

            </div>
            <div class="col-md-3">
                @foreach ($posts as $post)
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
                                    <img id="imageresource" class="img-thumbnail" src="{{ $post->image }}"
                                        alt="image">
                                </a>

                            </div>
                        </div>
                    </div>
            </div>
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
