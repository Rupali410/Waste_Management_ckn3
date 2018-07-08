
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
	<h3>Here are your previous requests</h3>
        <?php
		
		
		
		
		
		include_once("config.php");
		
		

		$email=$_SESSION['sess_user'];
		$sql="SELECT * FROM `requests`  WHERE email='".$email."'  ORDER BY `date` ASC;";
		//echo $sql;
		$retval = mysql_query( $sql, $con );
								
							   if(! $retval ) {
								  die('Could not get data: ' . mysql_error());
							   }
										echo"<table border='3'><tr><th>Name</th>
											<th>Address</th>
											<th>City</th>
											<th>paper</th>
											<th>Paper Weight</th>
											<th>Iron</th>
											<th>Iron Weight</th>
											<th>Book</th>
											<th>Book Weight</th>
											<th>Plastic </th>
											<th>Plastic Weight</th>
											<th>Status</th>
											<th>Date</th>
											</tr>";			
									while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
									{
									  echo "<tr><td>{$row['name']}</td>
											<td>{$row['address']}</td>
											<td>{$row['city']}</td>";
										echo	"<td>{$row['paper']}</td>";
										if($row['pweight']=='0')
										{
											echo "<td>NA</td>";
										}
										else
										{
											echo "<td>{$row['pweight']}</td>";
										}
										echo	"<td>{$row['metal']}</td>";
										if($row['mweight']=='0')
										{
											echo "<td>NA</td>";
										}
										else
										{
											echo "<td>{$row['mweight']}</td>";
										}
										echo	"<td>{$row['book']}</td>";
										if($row['bweight']=='0')
										{
											echo "<td>NA</td>";
										}
										else
										{
											echo "<td>{$row['bweight']}</td>";
										}
										echo	"<td>{$row['plastic']}</td>";
										if($row['plweight']=='0')
										{
											echo "<td>NA</td>";
										}
										else
										{
											echo "<td>{$row['plweight']}</td>";
										}
										echo "<td>{$row['status']}</td>";
										echo "<td>{$row['date']}</td>";
										echo	"</tr>";
											
									}
									echo "</table>";
											
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