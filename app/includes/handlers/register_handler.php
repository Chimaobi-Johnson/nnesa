<?php


    $email = "";
    $username = "";
    $password = "";
    $password2 = "";
    $hashed_password = "";
    $error_array = array();

  if(isset($_POST['reg_button'])) {

    $username = strip_tags($_POST['reg_name']);
    $username = str_replace(' ', '_', $username);
    $username = ucfirst(strtolower($username));




    $_SESSION['reg_name'] = $username;
     if (strlen($username) > 25 || strlen($username) < 2) {
        
        array_push($error_array, 'Sorry username must be between 2 and 25 characters long');
    }
    //check if there is an existing username
      $check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username='$username'");
      if (mysqli_num_rows($check_username_query) != 0) {
        $double_name_error = 'Sorry username already exists in our database, please try another one or add numbers to your username';
        array_push($error_array, $double_name_error);
      }

    $email = strip_tags($_POST['reg_email']);
    $email = str_replace('', '', $email);
    $email = ucfirst(strtolower($email));
    $_SESSION['reg_email'] = $email;
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);

      //check if email already exists
      $e_check = mysqli_query($con, "SELECT email FROM users WHERE email='$email'");

      //count no. of rows returned
      if (mysqli_num_rows($e_check) > 0) {
        array_push($error_array, "Email already in use<br />");
      }
      }
      else {
        array_push($error_array, "Invalid email format<br />");
      }

    $password = strip_tags($_POST['reg_password']);
    $password2 = strip_tags($_POST['reg_password2']);

      if ($password != $password2) {
        array_push($error_array, 'Password one and password two does not match!');
      }
      else {
        if (preg_match('/[^A-Za-z0-9]/', $password)) {
        array_push($error_array, "Your password must contain only English characters and numbers<br />");
    }
      }

        if (strlen($password > 30 || strlen($password) < 5)) {
         array_push($error_array, "Your password must be between 5 and 30 characters<br />");
       }

       if (empty($error_array)) {
          // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

          $sqlinsert = "INSERT INTO users (username, password, email, join_date) 
            VALUES ('$username', '$password', '$email', now())";

            if (mysqli_query($con, $sqlinsert)) {
             $successmsg = "<p style='padding:20px; background-color:green; color:white; text-align:center; width:100%;'>Registration Successful, You can now login</p>";

              //clear session variables
               $_SESSION['reg_name'] = "";
               $_SESSION['reg_email'] = "";
               $_SESSION['reg_password'] = "";
               $_SESSION['reg_password2'] = "";
               // header('Location: login.php');

            } else {
            $errorresult = "<p style='padding:20px; background-color:red; color:white; text-align:center; width:100%;'>An Error occurred</p>";
            echo $errorresult;
          }


       }



  }


  