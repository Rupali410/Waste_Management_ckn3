
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
	<h3>Update Weight here</h3>
        <?php
		
		
		
		
		
		include_once("config.php");
		
		

		$email=$_SESSION['sess_user'];
		$sql="SELECT * FROM `requests`  WHERE email='".$email."' and status='Processing' ORDER BY `date` ASC;";
		//echo $sql;
		$retval = mysql_query( $sql, $con );
								
							   if(! $retval ) {
								  die('Could not get data: ' . mysql_error());
							   }
								echo "<form method='post'><select name='id'>";
								while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
									{
									  	echo "<option value='{$row['requestid']}'>{$row['requestid']}</option>";
									}
									echo "</select>
										<input type='submit' value='Go' name='submit'></form>
										";
				
		?>
		<?php 
			if(isset($_POST["submit"])){
				$id=$_POST['id'];

						$sql="SELECT * FROM `requests`  WHERE requestid='".$id."';";
						//echo $sql;
						$retval = mysql_query( $sql, $con );
								
							   if(! $retval ) {
								  die('Could not get data: ' . mysql_error());
							   }
							   echo "<form method='post'>
									<input type='hidden' name='id' value='".$id."'>";
							   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) 
									{	
										if($row['paper']!="NO")
										{
											echo "Paper Weight:- <input type='text' name='pweight'><br><br>";
										}
										else
										{
											echo "<input type='hidden' name='pweight' value=0><br><br>";
										}
										
										if($row['book']!="NO")
										{
											echo "Books Weight:- <input type='text' name='bweight'><br><br>";
										}
										
										else
										{
											echo "<input type='hidden' name='bweight' value=0><br><br>";
										}
										
										if($row['metal']!="NO")
										{
											echo "Metal Weight:- <input type='text' name='mweight'><br><br>";
										}
										
										else
										{
											echo "<input type='hidden' name=mpweight' value=0><br><br>";
										}
										
										if($row['plastic']!="NO")
										{
											echo "Plastic Weight:- <input type='text' name='plweight'><br><br>";
											
										}
										
										else
										{
											echo "<input type='hidden' name='plweight' value=0><br><br>";
										}
									}
									echo "<input type='submit' name='update' value='upadate'></form>";
			}
			?>
			
		<?php 
		
			if(isset($_POST["update"]))
			{
				$id=$_POST['id'];
				$pweight=$_POST['pweight'];
				$bweight=$_POST['bweight'];
				$mweight=$_POST['mweight'];
				$plweight=$_POST['plweight'];
				$sql="UPDATE `requests` SET `pweight`='".$pweight."',`mweight`='".$mweight."',`bweight`='".$bweight."',`plweight`='".$plweight."'
				WHERE requestid='".$id."'";
				//echo $sql;
									if (!mysql_query($sql,$con))
									{
									die('Error: ' . mysql_error());
									}
								echo "<script>alert('Weight is successfully updated')</script>";
									
									echo "<script> window.location.assign('home.php'); </script>";
									
												mysql_close($con);
												//header("Location: updatefrm.php");
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