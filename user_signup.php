<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="js/cookis.js"></script>
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

<body onload="checkCookie()">
  <div class="contain">
    <div class="forms-container">
      <div class="signin">
        <form action="http://localhost/basha-khujo/backend_file/user_info_connection.php" method="post" class="sign-in-form">
          <h1 class="top-title">Find Your Perfect Home with Best Offered Price?</h1>
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="FirstName" placeholder="User Name" required />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="nid" placeholder="NID" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" name="Email" placeholder="Email" required />
          </div>
          <div class="input-field">
            <i class="fa fa-phone-square"></i>
            <input type="number" name="Mobile_Number" placeholder="Mobile Number" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div>
            <p class="term-policy">By proceeding, I agree to cShare's <a href="#">Terms of Use</a> and acknowledge that I have read the <a href="#">Privacy Policy</a>.</p>
          </div>
          <input type="submit" name="Submit1" class="btn1 solid" value="Sign Up" />
          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Welcome Back. Let's get good experiance with Us.
          </p>
          <a class="btn-link" href="http://localhost/basha-khujo/user_signin.php"><button class="btn1 transparent" id="sign-up-btn">
              Sign In
            </button></a>
        </div>
        <img src="basha-khujo-website/images/home-bg.jpg" class="image" alt="" />
      </div>
    </div>
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

menu.onclick = () =>{
    navbar.classList.toggle('active');
    menu.classList.toggle('fa-times');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    menu.classList.remove('fa-times');
}

</script>

</body>
</html>