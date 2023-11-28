<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/user_signup.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="basha-khujo-website/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Basha Khujo</title>
</head>

<body>
    <div class="container" style="margin:100px; margin-bottom: 100px;">
        <h1 class="text-center text-warning fs-1">Create your Perfect description for you house rent.</h1>
        <form class="form-control" style="margin-top: 50px;"   action="http://localhost/Basha-khujo/backend_file/owner_post_connection.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="formFileLg" class="form-label fs-3">Put your Basha type of Title</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="title">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">Put your Basha Cost</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="cost">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">How many rooms are there?</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="roomNumber">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">How many baths are there?</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="baths">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">How many square feet it is?</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="feets">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">Location description?</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="location">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">About your house rental description:</label>
                <input class="form-control form-control-lg" id="formFileLg" type="text" name="description">
            </div>
            <div>
                <label for="formFileLg" class="form-label fs-3">Put a beautyfull picture for your house.</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="image[]" multiple>
            </div>
            
            <input class="form-control form-control-lg" id="formFileLg" name="submit" type="submit" value="Submit">
        </form>
    </div>

    <!-- footer section starts  -->

    <section class="footer">

        <div class="footer-container">

            <div class="box-container">

                <div class="box">
                    <h3>branch location</h3>
                    <a href="#">Dhaka</a>
                    <a href="#">Chittagang</a>
                    <a href="#">Rajshahi</a>
                    <a href="#">Sylhet</a>
                    <a href="#">Khulna</a>
                    <a href="#">Barisal</a>
                </div>

                <div class="box">
                    <h3>quick links</h3>
                    <a href="#">home</a>
                    <a href="#">services</a>
                    <a href="#">featured</a>
                    <a href="#">agents</a>
                    <a href="#">contact</a>
                </div>

                <div class="box">
                    <h3>extra links</h3>
                    <a href="#">my account</a>
                    <a href="#">my favorite</a>
                    <a href="#">my list</a>
                </div>

                <div class="box">
                    <h3>follow us</h3>
                    <a href="#">facebook</a>
                    <a href="#">twitter</a>
                    <a href="#">instagram</a>
                    <a href="#">linkedin</a>
                </div>

            </div>

            <div class="credit">created by <span> Basha Khujo designer </span> | all rights reserved! </div>

        </div>

    </section>

    <!-- footer section ends -->






    <!-- javascript part  -->
    <script>
        let menu = document.querySelector('#menu-bars');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () => {
            navbar.classList.toggle('active');
            menu.classList.toggle('fa-times');
        }

        window.onscroll = () => {
            navbar.classList.remove('active');
            menu.classList.remove('fa-times');
        }
    </script>

</body>

</html>