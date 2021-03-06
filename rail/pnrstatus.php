
<!DOCTYPE html>
<html>
<head>
	<title>PNR Status</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#pnr	{
			font-size: 20px;
			background-color: white;
			width: 500px;
			height: 300px;
			margin: auto;
			border-radius: 25px;
			border: 2px solid blue; 
			margin: auto;
  			position: absolute;
  			left: 0; 
  			right: 0;
  			padding-top: 40px;
  			padding-bottom:20px;
  			margin-top: 130px;
 
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#pnrtext	{
			padding-top: 20px;
		}
	</style>
</head>
<body>
<?php
include("header.php"); ?>
<center>
	<div id="pnr">Check your PNR status here:<br/><br/>
	<form method="post" name="pnrstatus" action="pnrstatus.php">
	<div id="pnrtext"><input type="text" name="ti_no" size="30" maxlength="10" placeholder="Enter PNR here"></div>
	<br/><br/>
	<input type="submit" name="submit" value="Check here!" class="button" id="submit"><br/><br/>
	<?php  
		
			// echo '<form action="pnrstatus.php" method="post"><input type="submit" class="button" value="Cancel your ticket!" name="cancel" id="cancel"/></form>';
        
		?>
	</form>
	<?php 
	// session_start();
	include("connection.php");
	if(!$conn){  
		echo "<script type='text/javascript'>alert('Database failed');</script>";
		die('Could not connect: '.mysqli_connect_error());  
	}
	if (isset($_POST['submit']))
	{
		$ti_no=$_POST['ti_no'];
		$sql = "SELECT * FROM tickets WHERE ti_no= '$ti_no'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		
		if($row==NULL)
		{
			echo "<script type='text/javascript'>alert('PNR not found');</script>";
		}
		else{
			echo("Your status is ".$row['t_status']."<br>");
			echo("Your passenger id is ".$row['p_id']."<br>");
			echo("Your train no is ".$row['t_no']."<br>");
		}
	}
	// if (isset($_POST['cancel']))
	// {
	// 	$pnr=$_POST['pnr'];
	// 	$sql = "DELETE FROM tickets WHERE PNR=$pnr;";
	// 	if(mysqli_query($conn, $sql))
	// 		echo "<script type='text/javascript'>alert('Your ticket has been cancelled');</script>";
	// 		else echo "<script type='text/javascript'>alert('Cancellation failed');</script>";	
	// }
?>
	</div>
</center>
</body>
</html>