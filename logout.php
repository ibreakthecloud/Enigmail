<?php
  session_start();
  session_destroy();
  unset($_SESSION['username']);
  unset($_SESSION['password']);
  $_SESSION['message'] = "you are now logged out";
  header("Location: index.php");

?>