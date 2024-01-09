<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITS SOCIAL MEDIA</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

        {{-- Start you div here --}}
        <form method="post" action="{{ route('users.authenticate') }}" style="position:relative">
            @csrf
            <div class="popup">
                <div>
                @if (session('error'))
                    <div class="alert alert-danger" style="position:absolute; top:-4.5rem; left:0; width:100%">
                        <i class="fa-solid fa-triangle-exclamation"></i> <small>{{ session('error') }}</small>
                    </div>
                @endif
                    <img src="{{ asset('logo/dits.png') }}" alt="" style="display: block; margin: 0 auto; width: 55px; height: auto; padding-bottom: 10px;">
                    <h4>Login</h4>
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
                    <button type="submit" class="button type1 mx-auto d-grid gap-2"><span class="btn-txt">Login</span></button>
                    <div style="font-size: 90%; text-align: center;">
                        <span>New to DITS Social Media?</span> <a href="{{ route('register') }}">Sign up here</a>
                    </div>
                </div>

            </div>
        </form>


        <style>
            body {
                background-color: #13253D;
            }

            .popup {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #f2f2f2;
                border-radius: 5px;
                padding: 20px;
                box-shadow: 0px 0px 10px 0px rgb(255, 255, 255);
                background: transparent;
                backdrop-filter: blur(10px);
                border: 1px solid gray;
                border-radius: 8px;
                color: white;
            }

            h4 {
                text-align: center;
                margin-bottom: 4%;
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
                margin-bottom: 5%;
                margin-top: 3%;
            }

            .btn-txt {
                z-index: 1;
                font-weight: 800;
                letter-spacing: 5px;
                margin-top: 2%;
            }

            .type1::after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                transition: all 0.3s ease-in-out;
                background-color: #ffffff;
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
        </style>
        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>

    </html>
z




    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
