<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teachers Admin Dashboard</title>
    <link rel="stylesheet" href="/teacherStyle.css" />
    <link rel="stylesheet" href="/coursestyle.css" />
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link type="text/css" href="/css/perfect-scrollbar.css" re="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="/approvecourse.css" />
  </head>

  <body class="full-screen-preview-r">
    <div class="preview__header-r" data-view="ctaHeader">
      <a class="header-Debo-Tutor" href="#">Debo SkillShare</a>
    </div>

    <div class="container-r">
      <!-- Aside Class -->
      <aside class="debo-aside">
        <!-- <div class="overview-r">
            <span class="icons-r">Icons</span>
            <h3>Overview</h3>
        </div> -->
        <div class="student-dashboard-r">
            <h4 class="admin-class-r">Admin</h4>

            <div class="overview-r">
                <a href="dashboard" class="aside-child-r">
                    <i class="fa-solid fa-gauge icons-r"></i>
                    <h3>Dashboard</h3>
                </a>
            </div>
       {{-- @if(session::has('super'))
         @if(session::get('super') == 1)
            <div class="overview-r">
                <a href="add-admin" class="aside-child-r">
                    <i class='fas fa-user-edit fa-lg'></i>

                    <h3>Add Admin</h3>
                </a>
            </div>
            @endif
          @endif   --}}

          <div class="overview-r">
            <a href="Edit-Account" class="aside-child-r">
                <i class='fas fa-user-edit fa-lg'></i>

                <h3>Edit Account</h3>
            </a>
        </div>

        <div class="overview-r">
            <a href="Change-password" class="aside-child-r">
                <i class='fas fa-user-edit fa-lg'></i>

                <h3>Edit Password</h3>
            </a>
        </div>

          <div class="overview-r">
            <a href="teachers" class="aside-child-r">
                <i class="fas fa-ad"></i>
                <h3>Teachers</h3>
            </a>
        </div>

        <div class="overview-r">
            <a href="Students" class="aside-child-r">
                <i class="fa-solid fa-user-graduate"></i>
                <h3>Students</h3>
            </a>
        </div>
{{-- 
            <div class="overview-r">
                <a href="uploadsteacher.html" class="aside-child-r">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <h3>Upload Teacher</h3>
                </a>
            </div> --}}

            <div class="overview-r">
                <a href="Courses" class="aside-child-r">
                    <i class="fas fa-file"></i>
                    <h3>Courses</h3>
                </a>
            </div>

            <div class="overview-r">
                <a href="approveCourse" class="aside-child-r">
                    <i class="fas fa-file"></i>
                    <h3>Approve Course</h3>
                </a>
            </div>


            <div class="overview-r">
                <a href="uploadingVideo.html" class="aside-child-r">
                    <i class="fas fa-video"></i>
                    <h3>Videos</h3>
                </a>
            </div>
           
            <div class="overview-r">
                <a href="notification" class="aside-child-r">
                   <i class="fa-regular fa-bell icons-r"></i>
                   <h3>Notification</h3>
            </a>
            </div>
            
            <ul>

            </ul>
        </div>
    </aside>
    <!-- aside class ended -->
      <!-- aside class ended -->

      <div class="container">
        <section>
          <h2>Courses list</h2>
          <div class="grid-3-cols">

            @foreach ($course as $courses)
            <figure class="chair">
              <div class="img-container">
              <img src="{{$courses->course_thumb}}" alt="Chair" />
              </div>
              <div class="chair-box">
                <h3><a href="#" class="course-title">{{$courses->course_name}}</a></h3>
                <ul class="chair-details">
                  <li>
                    {{-- <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="chair-icon"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"
                      />
                    </svg> --}}
                    <!-- Span is a generic INLINE text element, it doesn't have any meaning. It's like a div element, but inline -->
                    {{-- <span>Easy and fun</span> --}}
                  </li>
                  <!-- <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="chair-icon"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <span>4h Length</span>
                  </li> -->

                  {{-- <li>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="chair-icon"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                      />
                    </svg>
                    <span>Project based</span>
                  </li> --}}
                </ul>
                <div class="chair-price">
                  <!-- <strong>250etb</strong> -->
                  <a href="{{url('approve_course',$courses->course_id)}}" class="btn btn--small">Approve</a>
                  <a href="{{url('reject_course',$courses->course_id)}}" class="btn btn--small2">Reject</a>
                </div>
              </div>
            </figure>

            @endforeach

            
          </div>
        </section>
      </div>
      <!-- Container body Class -->
    </div>
    <!-- End of container Class -->
    <script src="script.js"></script>
  </body>
</html>
