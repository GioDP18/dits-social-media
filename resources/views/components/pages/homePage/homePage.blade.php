<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DITS TAMBAYAN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
body::-webkit-scrollbar{
    display:none;
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
    background: linear-gradient(0deg, #12243B 0%, rgba(132,116,254,1) 100%);
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
<body style="background-color:#13253D">
    {{-- Check errors for uploading posts --}}
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    {{-- Start you div here --}}



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
                    <li style="list-style:none; padding:.5rem;"><i class="fa-solid fa-user"></i> <a href="{{ route('timeline',  Auth::user()->id) }}" style="text-decoration:none; color:white;">Profile</a></li>
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
    <div style="margin:1rem 1rem;">
        {{-- All Buttons here --}}
        <!-- Button for Adding New Post -->
        <button type="button" class="cssbuttons-io-button" data-bs-toggle="modal" data-bs-target="#addPost">
            <span>Add New Post</span>
        </button>
    </div>

    <div class="posts-div" style="display:flex; justify-content:center; flex-direction:column; margin-bottom:1rem;">
        {{ $likeOrLiked = "Like" }}
        @foreach ($posts as $post)
        <div class="each-post" style="background-color:white; box-shadow: 5px 3px 4px #818181; width:90%; margin:auto; margin-top:1rem; border-radius:15px;">
            <div class="uploader d-flex p-3 pb-0" style="align-items:center; gap:.8rem;">
                <img src="{{ $post->users->image }}" alt="" style="border-radius:50%; width:2.2rem; height:2.2rem;">
                <div style="display:flex; flex-direction:column">
                    <span style="font-weight:bold; font-size:1.2rem;">{{ $post->users->first_name }} {{ $post->users->last_name }}</span>
                    <small style="font-size:.8rem;"><i class="fa-solid fa-clock"></i> {{ $post->created_at->format('g:ia F j, Y') }}</small>
                </div>
            </div>
            <hr style="width:95%; margin:1rem auto">
            <div class="images" style="margin:0 1rem;">
                <p style="margin:0 1rem;">{{ $post->caption }}</p>
                <div class="d-flex" style="overflow-y:auto; gap:10px;">
                    @foreach ($getPostImages as $getPostImage)
                        @if ($getPostImage->posts_id == $post->id)
                            <img src="{{ asset('storage/'.$getPostImage->image) }}" alt="" style="width:30rem;">
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="comments d-flex" style="justify-content:space-between; gap:1rem; margin:3rem 1rem 1rem 1rem;">
                <div>
                    <button type="button" class="comments-btn" style="width:18rem;" data-bs-toggle="modal" data-bs-target="#seeLikes_{{ $post->id }}"> See people who liked this post: <span id="likeCount_{{ $post->id }}" style="margin-left:3px; font-weight:bold">{{ $post->likes_count }}</span></button>
                </div>
                <div class="d-flex" style="gap:1rem">
                    <button id="like_{{ $post->id }}" name="like" class="comments-btn" onclick="handleLike({{ $post->id }})">
                        <i class="fa-solid fa-heart" id="likeIcon_{{ $post->id }}"
                        @foreach ($checkIfLiked as $checkedIfLiked)
                        @if ($checkedIfLiked->posts_id == $post->id)
                            {{ $likeOrLiked = "Liked" }}
                                style="color:red"
                        @else
                            {{ $likeOrLiked = "Like" }}
                        @endif
                        @endforeach
                        ></i>
                        <span style="width:.3rem;"></span> {{ $likeOrLiked }}
                    </button>
                    <button class="comments-btn" onclick="location.href='/comments/{{ $post->id }}'"><i class="fa-solid fa-comment"></i> <span style="width:.3rem;"></span> Comments: {{ $post->comments_count }}</button>
                </div>

            </div>
        </div>
        <!-- Modal to see peop;e who liked post -->
        <div class="modal fade" id="seeLikes_{{ $post->id }}" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div>
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"> People who liked this post</h1>
                        </div>
                        <div>
                            <h1 class="modal-title fs-5"><i class="fa-solid fa-heart" style="color:red"></i>12</h1>
                        </div>

                    </div>
                    <div class="modal-body">
                        @foreach ($likes as $like)
                            {{-- @if ($like->users->posts_id == $post->id) --}}
                                <li>{{ $like->users->posts_id }}</li>
                            {{-- @endif --}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div style="position: fixed; display:flex; justify-content:center; align-items:center; background-color:#6B63D3; border-radius:5px; bottom: 3rem; right: 3.2rem; width: 2rem; height: 2rem; transform: rotate(45deg);">
            <a href="#add" style="scroll-behavior:smooth;"><i class="fa-solid fa-arrow-up" style="transform:rotate(-45deg); color:white;"></i></a>
        </div>
    </div>
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
                            <h1 class="modal-title fs-5" id="staticBackdropLabel"><i class="fa-solid fa-plus"></i> Create New Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="caption" class="form-label" style="font-weight:bold">Caption</label>
                                <textarea class="form-control" name="caption" id="caption" rows="2" placeholder="What do you think?"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label" style="font-weight:bold">Upload Image</label>
                                <input type="file" class="form-control" name="images[]" id="image" accept="image/jpeg, image/png, image/jpg, image/gif" multiple/>
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
        function triggerProfileOptions(){
            var profileOptions = document.querySelector('#profileOptions');
            if(profileOptions.style.display == "none"){
                profileOptions.style.display = 'block';
            }
            else{
                profileOptions.style.display = 'none';
            }

        }

        function handleLike(posts_id){
            // var users_id = {{ Auth::user()->id }}
            var like_button = document.querySelector("#likeIcon_" + posts_id);
            var like_count = document.querySelector("#likeCount_" + posts_id);
            var typeCasted = parseInt(like_count.innerHTML);
            $.ajax({
                url: '/like',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    users_id: {{ Auth::user()->id }},
                    posts_id: posts_id
                },
                success: function (response) {
                    if(response.like){
                        like_button.style.color = 'red';
                        typeCasted += 1;
                        like_count.innerHTML = typeCasted;
                    }
                    else{
                        like_button.style.color = '#606060';
                        typeCasted -= 1;
                        like_count.innerHTML = typeCasted;
                    }
                    // Your logic to handle the response

                },
                error: function (xhr, status, error) {
                    // Handle errors
                    console.error(xhr.responseText);
                }
            });
        }

    </script>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
