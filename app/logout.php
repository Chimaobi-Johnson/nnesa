<?php 
  include('config/session.php');

  session_destroy();
  header('Location: login.php');
