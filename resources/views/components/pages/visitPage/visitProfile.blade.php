<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
    background: #13253d;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
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
    .profile-nav, .profile-info{
    margin-top:30px;   
    }

    .profile-nav .user-heading {
        background: #fbc02d;
        color: #fff;
        border-radius: 4px 4px 0 0;
        -webkit-border-radius: 4px 4px 0 0;
        padding: 30px;
        text-align: center;
    }

    .profile-nav .user-heading.round a  {
        border-radius: 50%;
        -webkit-border-radius: 50%;
        border: 10px solid rgba(255,255,255,0.3);
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


    .p-text-area, .p-text-area:focus {
        border: none;
        font-weight: 300;
        box-shadow: none;
        color: #c3c3c3;
        font-size: 16px;
    }

    .profile-info .card-footer {
        background-color:#f8f7f5 ;
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
        color: rgba(255,255,255,0.6);
    }

    ul.summary-list {
        display: inline-block;
        padding-left:0 ;
        width: 100%;
        margin-bottom: 0;
    }

    ul.summary-list > li {
        display: inline-block;
        width: 19.5%;
        text-align: center;
    }

    ul.summary-list > li > a > i {
        display:block;
        font-size: 18px;
        padding-bottom: 5px;
    }

    ul.summary-list > li > a {
        padding: 10px 0;
        display: inline-block;
        color: #818181;
    }

    ul.summary-list > li  {
        border-right: 1px solid #eaeaea;
    }

    ul.summary-list > li:last-child  {
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
    .activity span, .activity.alt span {
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
        margin-top:0 ;
        font-size: 16px;
    }

    .activity p {
        margin-bottom: 0;
        font-size: 13px;
    }

    .activity .activity-desk i, .activity.alt .activity-desk i {
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
        background: #F4F4F4 ;
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

    .activity-desk .album a{
        margin-right: 10px;
    }

    .activity-desk .album a:last-child{
        margin-right: 0px;
    }
</style>
<body>

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
<div class="container bootstrap snippets bootdey">
<div class="row">
    <div class="profile-nav col-md-3">
        <div class="card">
            <div class="user-heading round">
                <a href="#">
                    <img src="{{ asset('storage/'. $user->image) }}" alt="">
                </a>
                <h1>{{$user->first_name}} {{$user->last_name}}</h1>
                <p>{{$user->email}}</p>
            </div>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item active"><a class="nav-link active" href="#"> <i class=" fa fa-user"></i> Profile</a></li>
                
                <li class="nav-item "><a class="nav-link" href="#"> <i class="fa fa-edit"></i> Posts</a></li>
            </ul>
        </div>
    </div>
    
    <div class="profile-info col-md-9">
        <div class="card my-3">
            <div class="card-content m-5">
                <div class="row">
                    <div class="col"> 
                        <ul>
                            <li>
                                First Name: {{$user->first_name}}
                            </li>
                            <li>
                                Last Name: {{$user->last_name}}
                            </li>
                            <li>
                                Email: {{$user->email}}
                            </li>
                        </ul>
                    </div>
                    <div class="col">
                        <ul>
                            <li>
                                Gender: {{$user->gender}}
                            </li>
                            <li>
                                Birth Date: {{$user->birthdate}}
                            </li>
                            
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
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
                <img src="{{ asset('storage/'.$post->image) }}" alt="" style="width:20rem;">
            </div>
            <div class="comments m-3 py-2 d-flex" style="justify-content:end; gap:1rem;">
                <form action="{{ route('like') }}" method="post">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="users_id" id="" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="posts_id" id="" value="{{ $post->id }}">
                    <button type="submit" name="like" class="comments-btn" onclick="location.href='/comments/{{ $post->id }}'">
                        <i class="fa-solid fa-heart"
                        @foreach ($checkIfLiked as $checkedIfLiked)
                        @if ($checkedIfLiked->posts_id == $post->id)
                             style="color:red"
                        @endif
                        @endforeach
                        ></i>
                        <span style="width:.3rem;"></span> Likes: {{ count($post->likes) }}
                    </button>
                </form>
                <button class="comments-btn" onclick="location.href='/comments/{{ $post->id }}'"><i class="fa-solid fa-comment"></i> <span style="width:.3rem;"></span> Comments: {{ count($post->comments) }}</button>
            </div>
        </div>
        @endforeach
      
    </div>
  </div>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>
