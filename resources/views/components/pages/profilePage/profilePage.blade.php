<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITS Social Media</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    {{-- Start you div here --}}

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
                            <p>Name</p>
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
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="firstName" name="first_name" type="text"
                                        value="">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="last_name" name="last_name" type="text"
                                        value="">
                                </div>
                            </div>
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" id="birthdate" name="birthdate" type="date"
                                        value="06/10/1988">
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gender">Gender</label>
                                    <div class="form-label">
                                        <input type="radio" name="gender" class="radio1" value="male"> Male
                                        <input type="radio" name="gender" class="radio2" style="margin-left: 3%;"
                                            value="female">
                                        Female
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="email">Email address</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-key"></i></span>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="row gx-3">
                                <div class="col text-end">
                                    <button class="cancel float-right" type="button">Cancel</button>
                                    <button class="save" type="button">Save changes</button>
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
        {{-- Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
        {{-- JQuery --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>