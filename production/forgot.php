<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Food</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
  <?php
  error_reporting(0);
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
	
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
		
		 $query = mysqli_query($con, "SELECT * FROM users WHERE username = '".$username. "'");
  if(mysqli_num_rows(  $query) > 0){
	   $query = "update users SET password ='".md5($password)."' where username = '$username'";
        $result = mysqli_query($con,$query);
		
   
}
else{

 echo "<div class='form'><h3>!!!!!!!!!!! Please check your username</h3><br/>Click here to try again <a href='ufgp.php'>Update password</a></div>";

}
        if($result){
  
			
			
			
            echo "<div class='form'><h3>password updates successfully</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        
    }}
	else{
?>
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="post" name="login">
              <h1>Donar Login Form</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="none" pattern="[A-Za-z .]+"required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" id="password" required=""/>
				
              </div>
			  
			    <div>
                <input type="password" name="password"  id="confirm_password"class="form-control" placeholder="Confirm Password"  required=""/>
				
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
              </div>
			  
              <div>
			  <input class="btn btn-default submit" name="submit" type="submit" value="Login" />
               
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="signup.php" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                           <a href="http://localhost/food/home">   <h1></i>Home</h1></a>

                </div>
				
				                <div>
                           <a href="http://localhost/food/production/forgot.php">   <h1></i>Forgot Password</h1></a>

                </div>
              </div>
            </form>
          </section>
        </div>

      
      </div>
    </div>
	<?php } ?>
  </body>
</html>
