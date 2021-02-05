<?php 
	session_start();
	if(!(isset($_SESSION['Name']))){
		header("Location: index.php"); /* this redirect user to index page if user is not logged in */
	exit();
	}include "connection.php";
 ?>
 <!DOCTYPE html>
 <html>
 <link href="css/bootstrap2.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Butcherman+Caps" />
 <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Creepster+Caps" />

 <head>
 	<title>Profile</title>
 	<style type="text/css">
 		.wrapper
 		{
 			width: 300px;
 			margin: 0 auto;
			 color: brown;
			 font-family:"Creepster Caps";
 		}
 	</style>
 </head>
 <body style="background: url(images/bg.png)" class="jalan">
 <nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <img src = "images/judul.png" style = " width: 202px;height: 72px;"> </img>
    <!-- <h1 style=" color: #440000; font-family: "Butcherman Caps" ;"> Tic Tac Toe</h1>
    <h3 style="position : relative ; color: #440000 ; font-family: "Butcherman Caps" ;"> Horror</h3>-->
    <a href="edit2.php">
    <button style="float:right; margin:2%;" class="btn btn-default">Edit </button></a>
	<a href="changepassword.php">
    <button style="float:right; margin:2%;" class="btn btn-default">Ganti Password </button></a>
      
</div></nav>
 	<div class="container  text-center" style="max-width: 450px;>
 		<form action="" method="post">
 			<!--<button class="btn btn-default" style="float: right; width: 70px;" name="submit1" type="submit">Edit</button>-->
 		</form>
 		<div class="wrapper">
 			<?php

 			if(isset($_POST['submit1']))
 			{
 				?>
 				<script type="text/javascript">
 					window.location="edit2.php"
 				</script>
 				<?php
 			}


 				$q=mysqli_query($db,"SELECT * FROM users where username='$_SESSION[Name]';");
 			?>
 			<h2 style="text-align: center;">My Profile</h2>

 			<?php
				 $row=mysqli_fetch_assoc($q);
				 $pic = $row['pic'];
				// if (empty('pic')) $pic = "profile.png";
 				//echo "<div style='text-align: center'>˜
 					//<img class='img-circle profile-img' height=120 width=120  src='images/".$row['pic']."'></div>";
			 ?>
			 
			 <div>
			 <img src="images/<?= $pic?$pic:'profile.png';?>" class="card-img-top img-circle profile-img" alt="Foto <?=$_SESSION['Name']?>" style="width:150px;height:150px;">
			 </div>
			 <div> 
				
 			<div style="text-align: center"> <b style ="text-align: center; font-size: 16 px;  font-family : "Creepster Caps";" >Welcome, </b>
	 			<h4>
	 				<?php echo $_SESSION['Name']; ?>
	 			</h4>
 			</div>
 			<?php
 				echo "<b>";
 				echo "<table class='table table-bordered'>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> First Name: </b>";
	 					echo "</td>";

	 					echo "<td>";
	 						echo $row['first'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Last Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['last'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> User Name: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['username'];
	 					echo "</td>";
					 echo "</tr>";
					 echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Password: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['password'];
	 					echo "</td>";
	 				echo "</tr>";
	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Email: </b>";	
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['email'];
	 					echo "</td>";
	 				echo "</tr>";

	 				echo "<tr>";
	 					echo "<td>";
	 						echo "<b> Contact: </b>";
	 					echo "</td>";
	 					echo "<td>";
	 						echo $row['contact'];
	 					echo "</td>";
	 				echo "</tr>";

	 				
 				echo "</table>";
 				echo "</b>";
 			?>
 		</div>
	 </div>
 </body>
 <a href="dashboard.php" > <button style="float:left; margin:2%;" class="btn btn-default"> <span class="glyphicon glyphicon-profile"> </span>Back</button></a>

 </html>