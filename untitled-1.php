
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
        <form method="post" action="request.php">
            <h2 class="text-center">Drop Your Request</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="phone" placeholder="PhoneNo" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="address" placeholder="Address" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="street" placeholder="Street" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="city" placeholder="City" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="state" placeholder="State" required=""></div>
			<div class="form-group"><input class="form-control" type="text" name="zip" placeholder="Zip" required=""></div>
            <label>Mention Your Wastes</label>
            <div class="form-check">
			<input type="hidden" name="plastic" value="NO" />
			<input class="form-check-input" type="checkbox" id="formCheck-1" name='plastic' value='YES'>
			<label class="form-check-label" for="formCheck-1">Plastic Waste</label>
			</div>
			<div class="form-check">
			<input type="hidden" name="papper" value="NO" />
			<input class="form-check-input" type="checkbox" id="formCheck-2" name='papper' value='yes'>
			<label class="form-check-label" for="formCheck-2">Papper Waste</label></div>
			<div class="form-check">
			<input type="hidden" name="iron" value="NO" />
			<input class="form-check-input" type="checkbox" id="formCheck-3" name='iron' value='yes'>
			<label class="form-check-label" for="formCheck-3">Iron</label></div>
			<div class="form-check">
			<input type="hidden" name="books" value="NO" />
			<input class="form-check-input" type="checkbox" id="formCheck-4" name='books' value='yes'>
			<label class="form-check-label" for="formCheck-4">Books</label></div>
            
            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        </form>
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