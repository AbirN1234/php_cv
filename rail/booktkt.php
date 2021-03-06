<?php 
	// session_start();
	// if(empty($_SESSION['user_info'])){
	// 	echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	// }
	// // $conn = mysqli_connect("localhost","root","","railway");
	// include("connection.php");

	// if(!$conn){  
	// 	echo "<script type='text/javascript'>alert('Database failed');</script>";
	// 	die('Could not connect: '.mysqli_connect_error());  
	// }
	// if (isset($_POST['submit']))
	// {
	// 	$trains=$_POST['trains'];
	// 	$sql = "SELECT t_no FROM trains WHERE t_name = '$trains'";
	// 	$result = mysqli_query($conn, $sql);
	// 	$row = mysqli_fetch_assoc($result);
	// 	$email=$_SESSION['user_info'];
	// 	$query="UPDATE passengers SET t_no='$row[t_no]' WHERE email='$email';";
	// if(mysqli_query($conn, $query))
	// {  
	// 	$message = "Ticket booked successfully";
	// }
	// else {
	// 	$message="Transaction failed";
	// }
	// echo "<script type='text/javascript'>alert('$message');</script>";
	// }
?>

<?php
	session_start();
	// if(empty($_SESSION['user_info'])){
	// 	echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	// }
	if(!(isset($_SESSION['user_info'])))
	{
		header("location: login.php");
	}
	include("connection.php");

	if(!$conn){  
		echo "<script type='text/javascript'>alert('Database failed');</script>";
		die('Could not connect: '.mysqli_connect_error());  
	}
	if (isset($_POST['submit']))
	{
		$t_no = $_POST['t_no'];
		$coach = $_POST['coach'];

		$sql = "SELECT * FROM trains WHERE t_no='$t_no'";
		$tr_res=($conn->query($sql));
		$train = mysqli_fetch_assoc($tr_res);

		if($coach=="A3"){
			$var = $train['A3'] - 1;
			$sql = "UPDATE trains SET A3='$var' WHERE t_no='$t_no'";
		}
		elseif($coach=="SL"){
			$var = $train['SL'] - 1;
			$sql = "UPDATE trains SET SL='$var' WHERE t_no='$t_no'";

		}
		elseif($coach=="SS"){
			$var = $train['SS'] - 1;
			$sql = "UPDATE trains SET SS='$var' WHERE t_no='$t_no'";
		}
		
		
		
		if(mysqli_query($conn, $sql)){
			
			$var = $var + 1;
			$user=$_SESSION['user_info'];
			$sql1 = "INSERT INTO tickets SET seat='$var',coach='$coach' ,p_id='$user' , t_no='$t_no'";
			// mysqli_query($conn, $sql1);

			

			if($conn->query($sql1)){
				echo("<script>alert('Ticket successfull');</script>");
			}
			else
			{
				echo("<script>alert('Ticket un-successfull');</script>");
			}
		}
		else
		{
			echo("<script>alert('Seat update un-successfull');</script>");
		}

			
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Book a ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#booktkt	{
			margin:auto;
			margin-top: 50px;
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
			border-radius: 25px;
		}
		html { 
		  background: url(img/bg7.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			margin-left: 90px;
			font-size: 15px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 40px;
			margin-top: 30px
		}
	</style>
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0 )
			{
				alert("Please select your train and coach");
				trains.focus();
				return false;		
			}
			
		}
	</script>
</head>
<body>
	<?php
		include ('header.php');

		$sql2 = "SELECT * FROM trains";
		$tra_res=$conn->query($sql2);
		$row=mysqli_num_rows($tra_res);
		

	?>
	<div id="booktkt">
		<h1 align="center" id="journeytext">Choose your journey</h1><br/><br/>
		<form method="post" name="journeyform" action="booktkt.php" required onsubmit="return validate()">
			<select name="t_no" id="trains" >
				<option selected disabled>-------------------Select trains here----------------------</option>
				<?php
					if($row!=0)
					{
						while($new=mysqli_fetch_assoc($tra_res))
						{
							echo("<option value='".$new['t_no']."'>".$new['t_name']."-".$new['t_source']."-".$new['t_destination']."</option>");
						}
						// value="$new['t_no']"
					}

					$tr=$new['t_no'];

				?>
				
			</select>
			<br><br>
			<select name="coach" id="trains" style="align:center;">
				<!-- <option selected disabled>-------------------Select coach here----------------------</option> -->
				<option value="A3">3A</option>
				<option value="SL">SL</option>
				<option value="SS">SS</option>
			</select>
			<br/><br/>
			<input type="submit" name="submit" id="submit" class="button" />
		</form>
		<p style="color:white;">
			<?php
				$sql3 = "SELECT * FROM tickets WHERE seat='$var' AND coach='$coach' AND t_no='$t_no'";
				$ans=($conn->query($sql3));
				$abc=mysqli_fetch_assoc($ans);

				echo("Your seat no is : ".$var."<br>");
				echo("Your coach name is : ".$coach."<br>");
				echo("Your PNR no is : ".$abc['ti_no']);

			?>
		</p>
	</div>
	</body>
	</html>
