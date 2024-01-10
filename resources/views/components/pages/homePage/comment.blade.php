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

<body style="background-color: #13253d;">
    <div class="container p-5" id="container">
        <div class="row mx-auto justify-content-center">
            <div class="col-7">

                <div class="card shadow-lg p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <div>
                            <div class="uploader d-flex p-3 pb-0" style="align-items:center; gap:.8rem;">
                                <img src="{{ $post->users->image }}" alt=""
                                    style="border-radius:50%; width:2.2rem; height:2.2rem;">
                                <div style="display:flex; flex-direction:column">
                                    <span style="font-weight:bold; font-size:1.2rem;">{{ $post->users->first_name }}
                                        {{ $post->users->last_name }}</span>
                                    <small style="font-size:.8rem;"><i class="fa-solid fa-clock"></i>
                                        {{ $post->created_at->format('g:ia F j, Y') }}</small>
                                </div>
                            </div>
                        </div>
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
                <div class="card " style="box-shadow: 5px 3px 4px #818181;">
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
