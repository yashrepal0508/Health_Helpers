<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | Ecommerse webisite for Medical</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="medical.php">
                <img src="img/logo 2.png" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    
    <div class="page-container">
        
    </div>

    <div id="loading">
    </div>
    <div class="center">
        <h1>Login</h1>
        <form method="post" action="lg.php">
          <div class="txt_field">
            <input type="text" name="mail" id="mail" required>
            <span></span>
<label>Enter Your Email</label>
          </div>
          <div class="txt_field">
            <input type="password" name="pass" id="pass" required>
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">
            <a href="Forgotpass.php">Forgot Password? </a> </div>
          <input type="submit" value="Login">
          <div class="signup_link">
            Not a member? <a href="Registration.php">Signup</a>
          </div>
        </form>
      </div>
    

    <div class="footer">
        <div class="page-container footer-container">
        </div>
    </div>

 
</body>

</html>
