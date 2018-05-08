<?php
include 'includes/min/head.php';

if($_POST){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (!empty($username) || !empty($password)) {
      $checkUser = $connection->query("SELECT * FROM admin WHERE username = '{$username}'");
      if ($checkUser->rowCount() == 1) {
        $password = md5($password);
        $checkDetails = $connection->query("SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'");
        if ($results = $checkDetails->fetch(PDO::FETCH_OBJ)) {
          $_SESSION['userID'] = $results->id;
          header("location:dashboard.php");
        }else{
          $errors[] = "This Username and Password doesn't exist";
        }
      }else{
        $errors[] = "This Username doesn't exist";
      }
    } else{
      $errors[] = "All fields are required";
    }  
}
?>
<body id="login">

  <div class="login-logo">
    <a href="dashboard.php"><img src="images/logo.png" alt=""/></a>
    
  </div>

  <h2 class="form-heading">login</h2>

  <div class="app-cam">
    <?php
      if (!empty($errors)) {
        foreach ($errors as $value) {
          echo "<div class='alert alert-danger' role='alert'>
          $value
          </div>";
        }
      }
    ?>
	  <form action="" method="POST">

  		<input type="text" class="text" placeholder="E-mail address" name="username">

  		<input type="password" placeholder="Password" name="password">

  		<div class="submit"><input type="submit" value="Login"></div>

  		<ul class="new">
  			<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
  			<li class="new_right"><p class="sign">New here ?<a href="register.html"> Sign Up</a></p></li>
  			<div class="clearfix"></div>
  		</ul>
	</form>

  </div>
   <div class="copy_layout login">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
