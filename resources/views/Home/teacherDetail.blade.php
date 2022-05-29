<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Educenter</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css1/bootstrap.css" />
    <link rel="stylesheet" href="/css1/flaticon.css" />
    <link rel="stylesheet" href="/css1/themify-icons.css" />
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- main css -->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/css1/style.css" />
    <link rel="stylesheet" href="/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="/assets/css/owl.css">
    <link rel="stylesheet" href="/assets/css/lightbox.css">
    <link href="/css1/singleTeacher.css" rel="stylesheet">
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
            <ul class="main-menu">


            </ul>
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

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">

                        <li class="text-white h3 ">{{$teacher->first_name}} {{$teacher->middle_name}}</li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- teacher details -->
    <section class="section single-teacher">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-5">
                    <img class="img-fluid w-100" src="{{$teacher->profile}}" alt="teacher">
                </div>
                <div class="col-md-6 mb-5">
                    <h3>{{$teacher->first_name}} {{$teacher->middle_name}}</h3>
                    <h6 class="text-color">Computer Science</h6>
                    <p class="mb-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque accusamus tenetur ea harum delectus ab consequatur excepturi, odit qui in quo quia voluptate nam optio, culpa aspernatur. Error placeat iusto officia voluptas quae.</p>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <h4 class="mb-4">CONTACT INFO:</h4>
                            <ul class="list-unstyled">
                                <li class="mb-3"><a class="text-color" href={{$teacher->email}}"><i class="ti-email mr-2"></i>{{$teacher->email}}</a></li>
                                <li class="mb-3"><a class="text-color" href="callto:+120345876"><i class="ti-mobile mr-2"></i>{{$teacher->phone_no}}</a></li>
                                 @if($teacher->facebook == 1)
                                    <li class="mb-3"><a class="text-color" href="../{{$teacher->flink}}"><i class="ti-facebook mr-2"></i>{{$teacher->flink}}</a></li>
                                @endif

                                @if($teacher->twitter == 1)
                                    <li class="mb-3"><a class="text-color" href="../{{$teacher->tlink}}"><i class="ti-twitter-alt mr-2"></i>{{$teacher->tlink}}</a></li>
                               @endif   
                               
                               @if($teacher->linkedin == 1)
                                  <li class="mb-3"><a class="text-color" href="../{{$teacher->llink}}"><i class="fa-brands fa-linkedin mr-2"></i>{{$teacher->llink}}</a></li>
                               @endif
                               
                               @if($teacher->instagram == 1)
                                   <li class="mb-3"><a class="text-color" href="../{{$teacher->ilink}}"><i class="fa-brands fa-instagram  mr-2"></i>{{$teacher->ilink}}</a></li>
                               @endif  
                               
                               @if($teacher->github == 1)
                                 <li class="mb-3"><a class="text-color" href="../{{$teacher->glink}}"><i class="fa-brands fa-github mr-2"></i>{{$teacher->glink}}</a></li>
                               @endif
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">SUMMARY OF ACTIVITIES/INTERESTS</h4>
                            <ul class="list-unstyled">
                                <li class="mb-3">Computer Networking</li>
                                <li class="mb-3">Computer Security</li>
                                <li class="mb-3">Human Computer Interfacing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <h4 class="mb-4">BIOGRAPHY</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis
                        unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h4 class="mb-4">COURSES</h4>
                </div>
                <!-- course item -->

                @foreach($course as $courses)
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <img class="card-img-top rounded-0" src="{{$courses->course_thumb}}" alt="course thumb">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color">{{$courses->updated_at}}</i></li>
                                <li class="list-inline-item"><a class="text-color" href="#">{{$courses->course_name}}</a></li>
                            </ul>
                            {{-- <a href="course-single.html">
                                <h4 class="card-title">Complete Freelancing</h4>
                            </a> --}}
                            <p class="card-text mb-4 card-p">{{$courses->course_description}}.</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">Apply now</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </section>
    <!-- /teacher details -->

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