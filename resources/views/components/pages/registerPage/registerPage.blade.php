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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <canvas id="canvas"></canvas>
    {{-- Start you div here --}}
    <form method="post" action="{{ route('users.store') }}">
        @csrf
        @method('post')
        <div class="popup">
            <img src="{{ asset('logo/dits.png') }}" alt="DITS Social Media"
                style="display: block; margin: 0 auto; width: 60px; height: auto; padding-bottom: 10px;">
            <h4>Sign Up</h4>
            <div class="row">
                <div class="mb-3 col">
                    <label for="first_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstName" name="first_name">
                </div>
                <div class="mb-3 col">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name">
                </div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="birthdate" class="form-label">Birthday</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate">
                </div>
                <div class="mb-3 col">
                    <label for="gender" class="form-label">Gender</label>
                    <div class="form-label row">
                        <div
                            style="border: 1px solid #667281; border-radius: 5px; background-color: #253d5b; width: 42%; height: 38px; text-align: center; margin-left: 5%; margin-right: 5%; padding-top: 1.8%;">
                            <input type="radio" style="cursor: pointer;" name="gender" class="radio1 col"
                                style="margin-top: 10%" value="male"> Male
                        </div>
                        <div
                            style="border: 1px solid #667281; border-radius: 5px; background-color: #253d5b; width: 42%; height: 38px; text-align: center; padding-top: 1.8%;">
                            <input type="radio" style="cursor: pointer;" name="gender" class="radio2 col"
                                style="margin-top: 10%" value="female">
                            Female
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="button type1 mx-auto d-grid gap-2"><span
                    class="btn-txt">Register</span></button>
            <div style="font-size: 90%; text-align: center;">
                <span>Already have an account?<span> <a href="/">Login</a>
            </div>
            <div class="bg-stars">
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
                <span class="star"></span>
            </div>
        </div>
    </form>

    <style>
        body,
        html {
            margin: 0px;
            padding: 0px;
            background-color: #13253D;
            position: fixed;
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgb(0, 238, 255);
            border-radius: 8px;
            color: white;
            background: linear-gradient(14deg, rgba(2, 0, 36, 0.8) 0%, rgba(24, 24, 65, 0.7) 66%,
                    rgb(20, 76, 99) 100%), radial-gradient(circle, rgba(2, 0, 36, 0.5) 0%,
                    rgba(32, 15, 53, 0.2) 65%, rgba(14, 29, 28, 0.9) 100%);
            border: 2px solid #fff;
            -webkit-box-shadow: rgba(0, 212, 255) 0px 0px 50px -15px;
            box-shadow: rgba(0, 212, 255) 0px 0px 50px -15px;
            overflow: hidden;
            z-index: +1;
        }

        h4 {
            text-align: center;
            margin-bottom: 4%;
            font-weight: 700;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .button {
            height: 40px;
            width: 250px;
            position: relative;
            background-color: transparent;
            cursor: pointer;
            border: 2px solid #ffffff;
            overflow: hidden;
            border-radius: 30px;
            color: #ffffff;
            transition: all 0.3s ease-in-out;
            margin-bottom: 3%;
            margin-top: 1%;
        }

        .btn-txt {
            z-index: 1;
            font-weight: 800;
            letter-spacing: 5px;
            margin-top: 1.5%;
        }

        .type1::after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            transition: all 0.3s ease-in-out;
            background-color: white;
            border-radius: 30px;
            visibility: hidden;
            height: 10px;
            width: 10px;
            z-index: -1;
        }

        .button:hover {
            box-shadow: 1px 1px 200px #252525;
            color: #13253D;
            border: none;
        }

        .type1:hover::after {
            visibility: visible;
            transform: scale(100) translateX(2px);
        }

        .bg-stars {
            position: absolute;
            top: -3%;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background-size: cover;
            animation: animateBg 50s linear infinite;
        }

        @keyframes animateBg {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        .star {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 4px;
            height: 4px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1), 0 0 0 8px rgba(255, 255, 255, 0.1), 0 0 20px rgba(255, 255, 255, 0.1);
            animation: animate 3s linear infinite;
        }

        .star::before {
            content: '';
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 300px;
            height: 1px;
            background: linear-gradient(90deg, #fff, transparent);
        }

        @keyframes animate {
            0% {
                transform: rotate(315deg) translateX(0);
                opacity: 1;
            }

            70% {
                opacity: 1;
            }

            100% {
                transform: rotate(315deg) translateX(-1000px);
                opacity: 0;
            }
        }

        .star:nth-child(1) {
            top: 0;
            right: 0;
            left: initial;
            animation-delay: 0s;
            animation-duration: 1s;
        }

        .star:nth-child(2) {
            top: 0;
            right: 100px;
            left: initial;
            animation-delay: 0.2s;
            animation-duration: 3s;
        }

        .star:nth-child(3) {
            top: 0;
            right: 220px;
            left: initial;
            animation-delay: 2.75s;
            animation-duration: 2.75s;
        }

        .star:nth-child(4) {
            top: 0;
            right: -220px;
            left: initial;
            animation-delay: 1.6s;
            animation-duration: 1.6s;
        }

        .star:nth-child(5) {
            top: 0;
            right: -400px;
            left: initial;
            animation-delay: 1.9s;
            animation-duration: 1.9s;
        }
    </style>
    
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
</body>

</html>
