<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
              <li class="nav-item active"><a class="nav-link active" href="#"> <i class=" fa fa-user"></i> Profile</a></li>
             
              <li class="nav-item "><a class="nav-link" href="#"> <i class="fa fa-edit"></i> Posts</a></li>
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
                    <p>{{$post->caption}}</p>
                    
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <a href="#" class="link-offset-2 link-underline link-underline-opacity-0">
                                <img src="{{$user->image}}" alt="image" style="width:2rem; height:2rem; border-radius:100%;">
                            
                            
                                <small style="font-size: 0.2;">{{$user->firs_name}} {{$user->last_name}}</small>
                            </a>
                        </div>
                        <div>
                            <small style="font-size: 10px;">{{$post->created_at}}</small>
                        </div>
                        
                        
                        
                    </div>
                    
                    <a href="#" id="pop" >
                        <img id="imageresource" class="img-thumbnail" src="{{$post->image}}" alt="image">
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>

    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    {{-- JQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>