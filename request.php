
<?php 
session_start();
if(!isset($_SESSION["sess_user"])){
	header("location:untitled.php");
} else {
?>
<!DOCTYPE html>
<!-- /* -->
<!-- Author SHIVAM PARASHAR -->
<!-- */ -->
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.html">Reusable book Store</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="about.php">About us</a></li>
                    </ul>
					<h3><?php echo $_SESSION['sess_user']; ?></h3>
					<span class="navbar-text actions"> <a class="btn btn-light action-button" role="button" href="logout.php">Log out</a></span></div>
    </div>
    </nav>
    </div>
    
	<div class="contact-clean">
        <?php
		$name=$_POST['name'];
		$email=$_SESSION['sess_user'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zip=$_POST['zip'];
		$plastic=$_POST['plastic'];
		$paper=$_POST['papper'];
		$metal=$_POST['iron'];
		$book=$_POST['books'];
		$plweight=0;
		$pweight=0;
		$mweight=0;
		$bweight=0;
		$status="Requested";
		$date=date("y-m-d");
		$time=time();
		//$date=date_format($date,"dd-mm-yyyy");
		//echo $date;
		
		
		include_once("config.php");
		
		
		//INSERT INTO `asulike`.`requests`  ;
		
		$sql="INSERT INTO requests(`requestid`,`name`, `phone`, `address`, `street`, `city`, `state`, `zip`,
		`status`, `date`, `email`, `paper`, `pweight`, `metal`, `mweight`, `book`, `bweight`, `plastic`, `plweight`)
				VALUES ('".$time."','".$name."', '".$phone."', '".$address."', '".$street."', '".$city."', '".$state."', '".$zip."', 'Requested', 
				'".$date."', '".$email."', '".$paper."', '0', '".$metal."', '0', '".$book."', '0', '".$plastic."', '0')
				";
			//echo $sql;
		$result=mysql_query($sql);

		//echo $result;
		if($result){
		echo "<h3>Request successfully submitted </h3><p>Please check your application status if it shows processing then enter the weights according to your request.Click Here to go to dashboard home<a href='home.php'>Dashboard home</a></p>";
		} else {
		echo "Failure!";
		}
		
		?>
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
	<div class="projects-clean"></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
<?php 
}?>
</body>
</html>