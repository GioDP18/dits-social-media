<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    {{-- Start you div here --}}
    <div class="d-flex justify-content-center mx-auto " style="width: 200px; border:1px; color:black ">

        <form>

            <div class="d-flex justify-content-center mt-5">
                <p>
                    DITS Social Media
                </p>
            </div>

            <div class="mb-3" style="width: 30em">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-center">
                <p>New to DITS Social Media? <a href="">Sign-up here</a></p>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>




    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
