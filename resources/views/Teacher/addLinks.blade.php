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
<body>
    <div class="content-r">
                <div class="content-header-r">
                    <h1>Upload Videos</h1>
                </div>

                <form action="add-link" method="POST" class="content-cards-r" enctype="multipart/form-data">
                    @csrf
                    <div class="cards-r">
                        <div class="form-info-r">
                            <h3 class="form-info-header-r">Upload Video</h3>
                            <p class="form-info-par-r">Upload your video.</p>
                        </div>

                        <div class="fill-forms-r">

                            <div class="row">
                                <label for="" class="label-r">Title</label>
                                <input type="text" name="link" class="inputs-r" placeholder="Video Title">
                            </div>

                        </div>
                    </div>
              <button type="submit" class="save-r" name="save"> <i class="fa-solid fa-upload"></i> Upload</button>
                </form>
            </div>
</body>
</html>
