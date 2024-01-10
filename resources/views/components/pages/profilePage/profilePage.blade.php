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

    {{-- Start you div here --}}
    <canvas id="canvas"></canvas>
    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <img class="img-account-profile rounded-circle mb-2"
                            src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <div class="font-italic text-muted mb-4">
                            <p class="user_name">{{ Auth::user()->first_name }}
                                <span>{{ Auth::user()->last_name }}</span> </p>
                        </div>
                        <div>

                            <label for="profilePic">
                                <p class="button">Edit Profile Picture</p>
                                <input id="profilePic" type="file" hidden>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="profile card-body">
                        <form id="edit-profile-form" method="POST" action="{{ route('submitUpdate', $profile->id) }}"
                            action="">
                            @csrf
                            @method('PUT')
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="firstName" name="first_name" type="text"
                                        value="{{ $profile->first_name }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text"
                                        value="{{ $profile->last_name }}">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="birthdate" name="birthdate" type="date"
                                        value="{{ $profile->birthdate }}">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gender">Gender</label>
                                    <div class="form-label">
                                        @if ($profile->gender == 'male')
                                            <input type="radio" name="gender" class="radio1" value="male" checked>
                                            Male
                                            <input type="radio" name="gender" class="radio2" style="margin-left: 3%;"
                                                value="female"> Female
                                        @else
                                            <input type="radio" name="gender" class="radio1" value="male"> Male
                                            <input type="radio" name="gender" class="radio2" style="margin-left: 3%;"
                                                value="female" checked> Female
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $profile->email }}">
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label class="small mb-1" for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ $profile->email }}" readonly>
                                </div>
                            </div> -->
                            <div class="row gx-3">
                                <div class="col text-end">
                                    <button class="cancel float-right" type="button">Cancel</button>
                                    <button class="submit save" type="submit">Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <style>
            body {
                background-color: #13253D;
                position: fixed;
            }

            h4 {
                text-align: center;
                margin-bottom: 4%;
            }

            form {
                display: flex;
                flex-direction: column;
            }

            label {
                font-weight: bold;
                color: gray;
            }

            .user_name {
                font-weight: bold;
                font-size: 1.5em;
            }

            .button {
                padding: 6px;
                width: 250px;
                background-color: #2a3a50;
                cursor: pointer;
                border: 2px solid #ffffff;
                overflow: hidden;
                border-radius: 30px;
                color: #ffffff;
                transition: all 0.3s ease-in-out;
                margin-bottom: 3%;
                margin-top: 3%;
            }

            .save {
                height: 40px;
                width: 180px;
                background-color: #2a3a50;
                cursor: pointer;
                border: 2px solid #ffffff;
                overflow: hidden;
                border-radius: 30px;
                color: #ffffff;
                transition: all 0.3s ease-in-out;
                margin-bottom: 5%;
                margin-top: 3%;
            }

            .cancel {
                height: 40px;
                width: 180px;
                position: relative;
                background-color: #4f5660;
                cursor: pointer;
                border: 2px solid #ffffff;
                overflow: hidden;
                border-radius: 30px;
                color: #ffffff;
                transition: all 0.3s ease-in-out;
                margin-bottom: 5%;
                margin-top: 3%;
            }

            .save:hover {
                background-color: #425063;
                box-shadow: 1px 1px 15px #ffffff;
                color: #ffffff;
                border: none;
            }

            .cancel:hover {
                background-color: #5a636e;
                box-shadow: 1px 1px 15px #ffffff;
                color: #ffffff;
                border: none;
            }

            .img-account-profile {
                height: 10rem;
            }

            .rounded-circle {
                border-radius: 50% !important;
            }

            .card {
                box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
            }

            .card .card-header {
                font-weight: 500;
            }

            .card-header:first-child {
                border-radius: 0.35rem 0.35rem 0 0;
            }

            .card-header {
                padding: 1rem 1.35rem;
                margin-bottom: 0;
                background-color: rgba(33, 40, 50, 0.03);
                border-bottom: 1px solid rgba(33, 40, 50, 0.125);
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
