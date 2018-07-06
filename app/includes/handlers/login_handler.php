<?php 

if (isset($_POST['login_button'])) {
    $email = filter_var($_POST['log_email'], FILTER_SANITIZE_EMAIL); //validate eMail

    $error_array = array();

    $_SESSION['log_email'] = $email; //store email into session variable
    $password = $_POST['log_password']; //Get password

    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $check_database_query  = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);

    if ($check_login_query == 1) {
      $row = mysqli_fetch_array($check_database_query);
      $username = $row['username'];
      $email_data = $row['email'];
      // $hashed_password = $row['password'];

      // if (password_verify($password, $hashed_password)) {
              echo "<script> alert('Login successful'); </script>";
              $_SESSION['username'] = $username;
              $_SESSION['email'] = $email_data;
              header('Location: index.php');
              exit();
              // echo "login successful";

      // }
      // else {
      //   echo "invalid username or password";
      // }


    }

    else {
      // array_push($error_array, "Email or Password is not correct");
      $login_error = "<p style='padding:20px; background-color:red; color:white; text-align:center; width:100%;'>Error! Email or Password not correct</p>";
    }

  }


?>