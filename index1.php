

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - login &amp; signup form with html css &amp; javascript</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="wrapper">
      <div class="title-text">
        <div class="title login">Login Form</div>
        <div class="title signup">Signup Form</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="login.php" method="post" class="login">
            <div class="field">
              <input type="text" placeholder="email" name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="password" name="password">
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member? <a href="">Signup now</a></div>
          </form>

          <form action="submit.php" method="post" class="signup">
            
            <div class="field">
              <input type="text" placeholder="First Name" name="fname">
            </div>

            <div class="field">
              <input type="text" placeholder="Last  Name" name="lname">
            </div>


            <div class="field">
              <input type="Number" placeholder="Phone number" name="number">
            </div>

            <div class="field">
              <input type="text" placeholder="Email Address" name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" name="password">
            </div>
            
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup" onsubmit id="login">
            </div>
          </form>
        </div>
      </div>
    </div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
