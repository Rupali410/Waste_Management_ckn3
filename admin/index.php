<!DOCTYPE php>
<!-- /* -->
<!-- Author SHIVAM PARASHAR -->
<!-- */ -->
<php>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/styles.min.css">
	<script>
	function validate()
	{
		var password = document.getElementsByName("password")[0].value;
		var password1 = document.getElementsByName("password-repeat")[0].value;
		if (password != password1)
		{
		alert("password Doesnot match");
		}
		
	}
	</script
</head>

<body>
    <div></div>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="#">Reusable Book Store</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">About</a></li>
                    </ul><span class="navbar-text actions"> <a href="untitled.php" class="login">Log In</a></span></div>
            </div>
        </nav>
    </div>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" onchange="validate()" name="password-repeat" placeholder="Password (repeat)"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Sign Up</button></div>
				<a href="#" class="already">You already have an account? Login here.</a>
</form>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<?php
if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	include_once("config.php");
	$query=mysql_query("SELECT * FROM alogin WHERE email='".$email."'");
	$numrows=mysql_num_rows($query);
	if($numrows==0)
	{
	$sql="INSERT INTO alogin(email,password) VALUES('$email','$password')";

	$result=mysql_query($sql);


	if($result){
	echo "Account Successfully Created";
	header("Location: untitled.php");
	} else {
	echo "Failure!";
	}

	} else {
	echo "<script>alert('That username already exists! Please try again with another.');</script>";
	}

} else {
	echo "All fields are required!";
}
}

?>

</body>

</php>