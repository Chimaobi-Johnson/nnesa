<?php 

include('config/config.php'); 
include('includes/handlers/register_handler.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  NNESA 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.3" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body class="index-page sidebar-collapse">

              <div class="topheader">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 topheader-block1"><p><i class="fas fa-phone"></i>  +234 7012191531</p></div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 topheader-block2"><p><i class="fas fa-mail"></i>  SantosFoundation@gmail.com</p></div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 topheader-block3"></div>
                    <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3 topheader-block4">
                        <ul class="top-social-icons">
                          <li><i class="fas fa-twitter"></i></li>
                          <li><i class="fas fa-facebook-square"></i></li>
                          <li><i class="fas fa-google-plus"></i></li>
                          <li><i class="fas fa-instagram"></i></li>
                          <li><i class="fas fa-linkedIn"></i></li>
                        </ul>
                    </div>
                </div>    
            </div>


            <div id="topnavbar" class="topnav">
    <nav class="navbar navbar-default navbar-expand-lg" role="navigation-demo">
            <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-translate">
                <a class="navbar-brand" href="/presentation.html"><img src="assets/img/nnesa_logo_shadow.png" width="130px" height="80px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" data-hover="dropdown">
                  <ul class="navbar-nav ml-auto">
                  <li class="active nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="material-icons">explore</i> Discover
                    </a>
                  </li>
                   <li class="dropdown nav-item">
                      <a href="#pablo" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <i class="material-icons">account_circle</i> 
                        <b class="caret"></b>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <h6 class="dropdown-header">Dropdown header</h6>
                        <a href="#pablo" class="dropdown-item">Action</a>
                        <a href="#pablo" class="dropdown-item">Another action</a>
                        <a href="#pablo" class="dropdown-item">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">Separated link</a>
                        <div class="dropdown-divider"></div>
                        <a href="#pablo" class="dropdown-item">One more separated link</a>
                      </div>
                    </li>
                  <li class="nav-item">
                    <a href="#pablo" class="nav-link">
                      <i class="material-icons">settings</i> Settings
                    </a>
                  </li>

                </ul>
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-->
          </nav>
        </div>

          <div class="main-content">
           <div class="row form-row">
          <div class="col-md-4 col-xl-6 ml-auto mr-auto">
            <div class="card card-signup">
             
              <form class="form" method="post" action="register.php">
                 <?php if (isset($successmsg)) {
                   echo $successmsg;
                 } ?>
              <h3 style="text-align: center;">REGISTER</h3>
              <p style="font-style: italic; text-align: center;">Please fill in your details here</p>
                <p class="text-divider"></p>
                <div class="card-body">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="material-icons">face</i></span>
                    </div>
                    <input type="text" class="form-control" name="reg_name" value="<?php if(isset($_SESSION['reg_name'])) {
          echo $_SESSION['reg_name'];} ?>" placeholder="Username...">
                  </div>
               <?php if (in_array('Sorry username must be between 2 and 25 characters long', $error_array)) echo 'Sorry username must be between 2 and 25 characters long'; ?>
                 <?php if (in_array('Sorry username already exists in our database, please try another one or add numbers to your username', $error_array)) {echo 'Sorry username already exists in our database, please try another one or add numbers to your username';} ?>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input type="email" class="form-control" name="reg_email" value="<?php if(isset($_SESSION['reg_email'])) {
          echo $_SESSION['reg_email'];} ?>" placeholder="Email...">
                  </div>
                   <?php if (in_array("Email already in use<br />", $error_array)) echo "Email already in use<br />"; ?>
                 <?php if (in_array("Invalid email format<br />", $error_array)) {echo "Invalid email format<br />";} ?>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="reg_password" placeholder="Password...">
                  </div>
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input type="password" class="form-control" name="reg_password2" placeholder="Retype Password...">
                  </div>
                  <?php if (in_array('Password one and password two does not match!', $error_array)) echo 'Password one and password two does not match!<br />'; ?>
                 <?php if (in_array("Your password must contain only English characters and numbers<br />", $error_array)) {echo "Your password must contain only English characters and numbers<br />";} ?>
                 <?php if (in_array("Your password must be between 5 and 30 characters<br />", $error_array)) {echo "Your password must be between 5 and 30 characters<br />";} ?>
                  <!-- If you want to add a checkbox to this form, uncomment this code

                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" value="">
                        Subscribe to newsletter
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div> -->
                </div>
                <div class="card-footer justify-content-center">
                  <input type="submit" name="reg_button" value="REGISTER" class="btn btn-link btn-primary btn-lg">
                </div>
                <p style="text-align: center;">Already Registered? <a href="login.php">Login Here</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>

<?php 
  include('includes/footer.php');
?>
  