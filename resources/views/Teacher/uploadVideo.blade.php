<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Admin Dashboard</title>
    <link rel="stylesheet" href="teacherStyle.css">
    <link rel="stylesheet" href="coursestyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" href="css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <a href="teacher-dashboard" class="aside-child-r">
                        <i class="fa-solid fa-gauge icons-r"></i>
                        <h3>Dashboard</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="
                    Edit-account" class="aside-child-r">
                        <i class='fas fa-user-edit fa-lg'></i>

                        <h3>Edit Account</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="change-password" class="aside-child-r">
                        <i class='fas fa-user-edit fa-lg'></i>

                        <h3>Edit Password</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="add-courses" class="aside-child-r">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <h3>Add Course</h3>
                    </a>
                </div>


                <div class="overview-r">
                    <a href="courses" class="aside-child-r">
                        <i class="fas fa-video"></i>
                        <h3>Upload Videos</h3>
                    </a>
                </div>

                <div class="overview-r">
                    <a href="course.html" class="aside-child-r">
                        <i class="fas fa-file"></i>
                        <h3>Courses</h3>
                    </a>
                </div>
                
                <ul>

                </ul>
            </div>
        </aside>
        <!-- aside class ended -->

        <!-- Container body Class -->
        <div class="container-fluid-r">

            <!-- Navbar on Container -->
            <div class="navbar-container-r">
                <!-- <input type="search" class="search-r" name="search" id="" placeholder="Search"> -->

                {{-- <form class="search-r">
                    <input type="search" class="search-input-r" name="search" id="" placeholder="Search">
                    <button type="submit" class="button-search"> <i
                            class="fa-solid fa-magnifying-glass icons-r"></i></button>
                </form> --}}


                <a href="approveTeacher.html">
                    <i class="fa-regular fa-bell icons-r"></i>

                </a>

                <a href="feedback.html">
                    <i class="fa-regular fa-message icons-r"></i>
                </a>

                <a href="Teacherprofile.html">
                    <i class="fa-regular fa-user icons-r"></i>
                </a>


            </div>

            <!-- Body Content -->
            <div class="content-r">
                <div class="content-header-r">
                    <h1>Upload Videos</h1>
                </div>

                <form action="upload-video" method="POST" class="content-cards-r" enctype="multipart/form-data">
                    @csrf

                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Upload Video</h3>
                            <p class="form-info-par-r">Upload your video.</p>
                        </div>

                        <div class="fill-forms-r">

                            <div class="row">
                                <label for="" class="label-r">Title</label>
                                <input type="text" name="title" class="inputs-r" placeholder="Video Title">
                            </div>

                            <div class=" rows-r ">
                                <label for="getFile" class="myfile-r">

                                    <img class="svg-image-r" style="width: 50px; height: 50px;" src="svg.png" />
                                    {{-- <button onclick="document.getElementById('getFile-r').click()"
                                        class="myfile-btn-r">Thumbnail</button> --}}
                                </label>
                                <input type='file' name='thumb' id='file'"getFile-r"  class="inputs">

                            </div>

                            <div class=" rows-r ">
                                <label for="getFile-r" class="myfile-r">

                                    <img class="svg-image-r" style="width: 50px; height: 50px;" src="svg.png" />
                                    {{-- <button onclick="document.getElementById('getFile-r').click()"
                                        class="myfile-btn-r">Videos</button> --}}
                                </label>
                                <input type='file' name='video' id='file'"getFile" class="inputs-r">

                            </div>

                        </div>
                    </div>



                    <button type="submit" class="save-r" name="save"> <i class="fa-solid fa-upload"></i> Upload</button>
                </form>
            </div>
        </div>

    </div>
    <!-- End of container Class -->
    <script src="script.js"></script>
</body>

</html>