

<!DOCTYPE html>
<?php
  session_start();
  $username = "user";
  $password = "123";

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
  {
    header("Location: mail.php");
  }

  if (isset($_POST['username']) && isset($_POST['password']))
  {
    if($_POST['username'] == $username && $_POST['password'] == $password)
    {
      $_SESSION['loggedin'] = true;
      header("Location: mail.php");
    }
  }

?>


<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login::EnigMail</title>
  <meta name="viewport" content="width=600">
  
       <link rel="stylesheet" href="css/style2.css">
       <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">

 
</head>

<body style="background-image:url('images/bg2.jpg');">
  <div class="container-fluid">
 <div class="login-page">
<center>
 <img src="images/logo_login.png">
</center>
 <br>
<!-- Login Page Begins-->
 
<p aria-label="CodePen" style="text-align: center; font-size: 30px;">
  <span data-text="W">W</span><span data-text="E">E</span><span data-text="L">L</span><span data-text="C">C</span><span data-text="O">O</span><span data-text="M">M</span><span data-text="E">E</span><br>
  <span data-text="T">T</span><span data-text="O">O</span><br>
  <span data-text="E">E</span><span data-text="N">N</span><span data-text="I">I</span><span data-text="G">G</span><span data-text="M">M</span><span data-text="A">A</span><span data-text=" "> </span>
  <span data-text="M">M</span><span data-text="A">A</span><span data-text="I">I</span><span data-text="L">L</span>
</p>
<div class="form">
    <form action="#" method="post" class="login-form">
      <input type="text" name="username" required=" " placeholder="username"  />
      <input type="password" name="password" required=" " placeholder="password"/>
      <input type="submit" value="submit">
      <!-- <p class="message">Not registered? <a href="#">Create an account</a></p> -->
    </form>


  </div>
</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
  
</body>
</html>
