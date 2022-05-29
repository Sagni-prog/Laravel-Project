<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Courses Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css1/bootstrap.css" />
    <link rel="stylesheet" href="/css1/flaticon.css" />
    <link rel="stylesheet" href="/css1/themify-icons.css" />
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- main css -->
    <!-- Additional CSS Files -->

    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-grad-school.css">
    <link href="/css1/singleTeacher.css" rel="stylesheet">
    <link rel="stylesheet" href="/css1/style.css" />
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <link rel="stylesheet" href="/css1/course-detail.css">

    <!-- 
     //////////////////////////////////////////////////////
     DEBO TUTOR
     DEVELOPED by DEBO DEVELOPER TEAM
     DATE:           APR 5, 2022
     LOCATION:       JIMMA, OROMIA, ETHIOPIA
         
     Website: 		UNSET
     Email: 			UNSET
     Twitter: 		UNSET
     Facebook: 		UNSET
 
     //////////////////////////////////////////////////////
      -->
</head>

<body>


    <!--================ Start Header Menu Area =================-->
    <!--header-->
    <header class="main-header clearfix" role="header">
        <div class="logo">
            <a href="../"><em>Debo</em> Tutor</a>
        </div>
        <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
        <nav id="menu" class="main-nav" role="navigation">
            {{-- <ul class="main-menu">


            </ul> --}}
            <ul>
                <li>
                    @if(Session::has('loginId'))
                    <a href="student/logout"><i class="fa fa-user"></i>Sign out</a>
                     @endif  
                    @if(!Session::has('loginId'))
                    <a href="student/login"><i class="fa fa-sign-out"></i>Sign in</a>
                @endif
                </li>
            </ul>
        </nav>
    </header>
    <!--================ End Header Menu Area =================-->


    <!--================Home Banner Area =================-->

    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap  single-teacher">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                    
                            <video class="img-fluid"  src="<?php echo $course->course_intro;?>" controlslist="nodownload" class="A1-video" controls alt="videocontent" controls></video>
                    
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Description</h4>
                        <div class="content">
                            {{$course->course_detail}}
                        </div>

                        <h4 class="title">Course Lessons</h4>
                        <div class="content playlist">
                            <ul class="course_list">

                                @foreach($data as $datas)
                                <li class="justify-content-between d-flex">
                                    <p>{{$datas->title}}</p>
                                    <a class="primary-btn text-uppercase" href="{{url('show',$datas->vid_id)}}">Play</a>
                                </li>
                               
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p class="right-content-p">Trainer’s Name</p>
                                <span class="or"> {{$course->first_name}} {{$course->middle_name}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p class="right-content-p">Course fee</p>
                                <span>{{$course->course_fee}}</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p class="right-content-p">Free for</p>
                                <span>15 Days</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p class="right-content-p">Course Length </p>
                                <span>02:00:59</span>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="primary-btn2 text-uppercase enroll rounded-0 text-white">Enroll the course</a>

                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                            </div>
                        </div>

                        {{-- comment section --}}
                        <form action="{{url('course-comment',$course->course_id)}}" method="POST" class="feedeback">
                            @csrf
                            <h6 class="your-feedback">Your Comment</h6>
                            <textarea name="comment" class="form-control" cols="10" rows="10" placeholder="Put your comment here..."></textarea>
                            <div class="mt-10 text-right">
                                <!-- <a href="#" class="primary-btn2 text-right rounded-0 text-white">Comment</a> -->
                                <button type="submit" class="primary-btn2 text-right rounded-0 text-white">Comment</button>
                            </div>
                        </form>
                             {{-- comment section --}}
                        <div class="comments-area mb-30">

                            {{-- list of comments starts here  --}}

                            @foreach($comment as $comments)
                            <div class="comment-list-l d-flex">
                                {{-- <div class="single-comment single-reviews justify-content-between d-flex"> --}}
                                    {{-- <div class="user justify-content-between d-flex"> --}}
                                        <div>
                                            
                                            <img  src="{{$comments->profile}}" class="commentor" alt="">
                                        </div>
                                        {{-- </div> --}}
                                        <div class="desc">
                                            <h5><a href="#">{{$comments->first_name}} {{$comments->last_name}}</a>
                                                {{-- <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div> --}}
                                            </h5>
                                            <p class="comment">
                                               {{$comments->comment}}
                                            </p>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                            @endforeach
                             {{-- list of comments ends here  --}}


                            {{-- <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Elsie Cunningham</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Maria Luna</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><i class="fa fa-copyright"></i> Copyright 2022 | Powered by: <a href="https://deboengineering.com/n/" rel="sponsored" target="_parent">Debo Engineering</a>

                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <!-- jQuery -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- aos -->
    <script src="plugins/aos/aos.js"></script>
    <!-- venobox popup -->
    <script src="plugins/venobox/venobox.min.js"></script>
    <!-- mixitup filter -->
    <script src="plugins/mixitup/mixitup.min.js"></script>


    <!-- Main Script -->
    <script src="js/script.js"></script>
</body>

</html>