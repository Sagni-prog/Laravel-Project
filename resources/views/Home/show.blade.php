<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
  <link rel="stylesheet" href="/videostyle.css">
    <title>Document</title>
</head>
<body>
    <header class="main-header" role="header">
        <div class="logo">
            <a href="../"><em>Debo</em> Tutor</a>
        </div>
        <!-- <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a> -->
        <nav id="menu" class="main-nav" role="navigation">
            <ul class="main-menu">
                <li><a href="../student/logout">sign out</a></li>
            </ul>

            <ul>
                <li>

                </li>
            </ul>
        </nav>
    </header>
    <section class="container-g">
       
        <div class="video-g">
            <div class="play-it">
            {{-- <video src="/How to Install Composer Globally. _ PHP is not recognized as an internal or external command..mp4" controls class="video-p" ></video> --}}

            <video style = "height:100%;
            width: 100%;" src="<?php echo $data->path;?>" controlslist="nodownload" class="A1-video" controls alt="videocontent" controls></video>
         </div>
            <div class="video-title">
            <h1>{{$data->title}}</h1>
               <div class="view-section-p">
                
            {{-- <p style="opacity:60% ;">4,189,271 views</p> --}}
            <p tyle="opacity:50% ;">Mar 3, 2021</p>
            {{-- <button style="opacity: 100%;" class="like"><i class="fa-solid fa-thumbs-up"></i>7K</button>
            <button style="opacity: 100%;" class="like"><i class="fa-solid fa-thumbs-down"></i>1K</button> --}}
           
               </div>
        </div>
        <div class="dash"></div>
        <div class="account-con">
        <div class="account">
            <div class="imgg">
                <img src="{{$data->profile}}" alt="logo">
                <div class="name-sub">
                <p class="accout-na">{{$data->first_name}}</p> {{$data->middle_name}}</p>
                {{-- <p class="sub">1.2M subscribers<p> --}}
                </div>
            </div>
            {{-- <button type="submit">subscribe</button> --}}
        </div>
        <p class="discr">{{$data->course_description}}!</p>
        </div>
        <div class="dash"></div>
        <div class="commnet-setion">
            <div class="commnet-here">

                <div class="com-header">
                    {{$comment_count}} Comments 
                </div>
                <div class="com-area">
                    
                    <form method="POST" action="{{url('video-comment',$data->vid_id)}}">
                        @csrf
                        <div class="pro-comsec">
                        <img src="{{$student->profile}}" alt="commitphoto" >
                        <input type="text" name="comment" class="commiter_f" placeholder="Add a comment"> 
                        <button type="submit">Comment</button>
                        </div>
                       
                    </form>
                </div>

                @foreach($comments as $comment)
                <div class="commenters-com">
                    <div class="comminets">
                        <img style="border-radius: 50%;" src="{{$comment->profile}}" alt="commi">
                        <div class="com-pro">
                            <div class="comm-header"><h3 class="com-name">{{$comment->first_name}} {{$comment->last_name}}</h3>
                             {{-- <p class="date-com">{{$comment->created_at->diffForHumans()}}</p> --}}
                            </div>
                            
                            <p class="com-para">{{$comment->video_comment}}</p>
                            <div class="com-like-reply">
                                {{-- <button style="opacity: 50%;" class="like"><i class="fa-solid fa-thumbs-up"></i>22</button>
                                <button style="opacity: 50%;" class="like"><i class="fa-solid fa-thumbs-down"></i>1</button>
                                <button style="opacity: 50%;" class="replay" type="submit">Reply</button> --}}
                                <div class="pro-comsecs">
                                <div class="pro-comsec">
                                    <img src="{{$comment->profile}}" alt="commitphoto" >
                                    <input type="text" name="comment" class="commiter_f" placeholder="Add a comment"> 
                                </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>

                @endforeach
             
            </div>

        </div>
        
        </div>
        </div>
        <!-- playlist section -->
        <div class="playlists-list">
            <div class="show-tit">playlist</div>
            <div class="video-categoreg">
                {{-- <ul class="list-catagore">
                    <a href="#" class="list-v"><li > All video</li></a>
                    <a href="#" class="list-v"><li >javascript</li></a>
                    <a href="#" class="list-v"><li >C++</li></a>
                    <a href="#" class="list-v"><li >Java</li></a>
                    <a href="#" class="list-v"><li >React</li></a>
                    <a href="#" class="list-v"><li >html</li></a>
                   
                </ul> --}}
            </div>


         @foreach($videos as $video)
             <div class="vid-g">
              <video src="/How to Install Composer Globally. _ PHP is not recognized as an internal or external command..mp4" muted></video>
              <div class="small-dis">
                <h3 class="vid-title">
                    {{$comment->title}}
                </h3>
                {{-- <p class="accout-name">{{$video->first_name}}</p> --}}
                {{-- <p class="date-p">4,189,271 views ~ Mar 3, 2021</p> --}}
                </div>
              </div>
        @endforeach
            </div>
    </section>
    <script src="/video.js"></script>
    
</body>
</html>