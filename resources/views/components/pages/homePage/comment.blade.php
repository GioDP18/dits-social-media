<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    .comment-content {
        max-height: 350px;
        overflow-y: auto;
    }
</style>

<body style="background-color: #13253d;">
    <div style="position:fixed; z-index:1; width:100%; background-color:white; top:0; padding:.5rem 1rem; box-shadow: 5px 3px 4px #818181; display:flex; justify-content:space-between; align-items:center;">
        <div class="d-flex" style="gap:.5rem;">
            <a href="{{ route('home') }}">
                <img src="{{ asset('logo/dits.png') }}" alt="" style="width:3rem; height:3rem; border-radius:5px; box-shadow: 5px 3px 4px #818181;">
            </a>
            <h1 style="font-weight:bold; text-shadow: 5px 5px 4px #818181;">DITS TAMBAYAN</h1>
        </div>
        <div style="display:flex; gap:.5rem;">
            <div>
                <h5 style="color:#13253D;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
            </div>
            <div style="position:relative; cursor:pointer;" onclick="triggerProfileOptions()">
                <img src="{{ asset('storage/profile_images/'.Auth::user()->image) }}" alt="" style="border-radius:50%; width:2rem; height:2rem;">
                <div id="profileOptions" style="display:none; position:absolute; background-color:gray; top:3rem; right:0; width:7rem; color:white; padding:0 .5rem; border-radius:10px;">
                    <div style="position:absolute; background-color:gray; width:1rem; height:1rem; top:-.5rem; right:.7rem; transform:rotate(135deg)"></div>
                    <li style="list-style:none; padding:.5rem;"><i class="fa-solid fa-user"></i> <a href="{{ route('update',  Auth::user()->id) }}" style="text-decoration:none; color:white;">Profile</a></li>
                    <hr class="m-0">
                    <li style="list-style:none; padding:.5rem;">
                        <form method="post" action="{{ route('logout') }}">
                            @csrf
                            @method('POST')
                            <button type="submit" style="background-color:transparent; border:none; color:white; display:flex; gap:5px; text-align:right; align-items:center;"><i class="fa-solid fa-right-from-bracket"></i> Logout</button>
                        </form>
                    </li>
                </div>
            </div>
        </div>
    </div>

    <div style="height:5rem;" id="add"></div>
    <div class="container p-3" id="container">
        <div class="row mx-auto justify-content-center">


            <div class="col-7">

                <div class="card bg-body rounded" style="width:100%; height:100%; padding:0; box-shadow: 5px 3px 4px #818181;">
                    <div class="card-body">
                        <div>
                            <div class="uploader d-flex p-3 pb-0" style="align-items:center; gap:.8rem;" onclick="location.href='../visitProfile/{{ $post->users_id }}'">
                                <img src="{{ $post->users->image }}" alt="" style="border-radius:50%; width:2.2rem; height:2.2rem;">
                                <div style="display:flex; flex-direction:column">
                                    <span style="font-weight:bold; font-size:1.2rem;">{{ $post->users->first_name }} {{ $post->users->last_name }}</span>
                                    <small style="font-size:.8rem;"><i class="fa-solid fa-clock"></i> {{ $post->created_at->format('g:ia F j, Y') }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="card-content">
                            <p style="margin-left:1rem; margin-top:1rem;">{{$post->caption}}</p>

                            

                            <a href="#" id="pop" >
                                <img id="imageresource" class="img-thumbnail" src="{{ asset('storage/'.$post->image) }}" alt="image">
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
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                                        <img src="{{$comment->users->image}}" alt="image" style="width:2rem; height:2rem; border-radius:100%;">
                                        <small style="font-size: 0.2;">{{$comment->users->first_name}} {{$comment->users->last_name}}</small>
                                    </a>
                                </div>

                                <p>{{$comment->comment}}</p>
                                @if ($comment->image != " ")
                                <img class="img-thumbnail" src="{{ asset('storage/'.$comment->image)}}" alt="image">
                                @endif
                                <div class="d-flex justify-content-end">
                                    <small style="font-size: 10px;">{{$comment->created_at}}</small>
                                </div>

                            </div>
                            @endforeach


                        </div>

                        <form class="py-4" method="POST" action="{{ route('sendComment') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <input type="text" name="user_id" value="1" hidden>
                            <input type="text" name="posts_id" value="{{$post->id}}" hidden>

                            <div class="input-group mb-3">

                                <input type="text" name="comment" class="form-control" placeholder="Comment...." aria-label="comment" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Send</button>
                            </div>
                            <input type="file" name="image">
                            
                                
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" aria-hidden="true">
    <div class="modal-content bg-success bg-opacity-10" aria-hidden="true">
      <div class="modal-body d-flex justify-content-center" aria-hidden="true">
        <img src="" id="imagepreview" style="width: 700px; height: 600px;" >
      </div>
    </div>
  </div>
</div>


    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
