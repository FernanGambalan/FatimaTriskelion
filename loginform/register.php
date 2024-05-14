<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
    ></script>
    <link rel="stylesheet" href="includes/style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  
  <body>
    <div class="container">
        
      <div class="forms-container">
        <div class="signin-signup">
              <?php include('message.php'); ?>
          <form method="post" action="#" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
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

      
          <form method="post" action="registercode.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="uname" placeholder="Username" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="firstname" placeholder="Firstname" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text"  name="lastname" placeholder="Lastname" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="email"  name="email" placeholder="Email" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text"  name="contact" placeholder="Contact" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="password" placeholder="Password" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password"  name="cpassword" placeholder="Confirm Password" />
            </div>

            <input type="submit" name="register-btn" class="btn" value="Sign up" />
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
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent"  id="sign-up-btn">
              Sign up
            </button>
          </div>
          <a href="http://localhost/triskelion/"><img src="includes/img/phi.png" class="image" alt="" /></a>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="includes/img/sigma.png" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="includes/app.js"></script>
  </body>
</html>
