<?php
session_start();
$name = array('admin' => '81dc9bdb52d04dc20036dbd8313ed055', 'user' => 'c4ca4238a0b923820dcc509a6f75849b');
if (isset($_POST['submit'])){

	foreach ($name as $user => $pass){
	            if ($user == $_POST['user'] && $pass == md5($_POST['pass'])){
	                echo "Successful!<br>";
	                $_SESSION['loggedin']=$_POST['user'];
	                header("Location: myprofile.php");
 					exit;
	            }
	        }
echo "<script>alert(\"Логин или пароль неверны!\");</script>";
}
?>    

<!doctype html>
<html lang="ru">
  	<head>
	    <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!-- Bootstrap CSS -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	    <title>Вход</title>
	    <!-- Navigation -->
		<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
	    <!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<body> 	
		 <style>
	      .bd-placeholder-img {
	        font-size: 1.125rem;
	        text-anchor: middle;
	        -webkit-user-select: none;
	        -moz-user-select: none;
	        user-select: none;
	      }

	      @media (min-width: 768px) {
	        .bd-placeholder-img-lg {
	          font-size: 3.5rem;
	        }
	      }
	    </style>
	    <link href="assets/css/signin.css" rel="stylesheet">
		<main class="form-signin">
		  <form method="post">
		    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
		    <label for="inputEmail" class="visually-hidden">Email address</label>
		    <input class="form-control" name="user" placeholder="Login" required autofocus>
		    <label for="inputPassword" class="visually-hidden">Password</label>
		    <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
		    <div class="checkbox mb-3">
		      <label>
		        <input type="checkbox" value="remember-me"> Remember me
		      </label>
		    </div>
		    <input class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="Sign in"/>
		    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
		  </form>
		</main>       
  	</body>
</html>