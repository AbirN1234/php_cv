<?php
    session_start();
    if(!(isset($_SESSION['admin_info'])))
    {
        header("location: admin.php");
    }

    if(isset($_POST['submit1']))
    {
        include("connection.php");
        if(!$conn){  
            echo "<script type='text/javascript'>alert('Database failed');</script>";
            die('Could not connect: '.mysqli_connect_error());  
        }
        $t_no=$_POST['t_no'];
        $t_name=$_POST['t_name'];
        $t_source=$_POST['t_source'];
        $t_destination=$_POST['t_destination'];
        $t_duration=$_POST['t_duration'];
        $A3=$_POST['A3'];
        $SL=$_POST['SL'];
        $SS=$_POST['SS'];


        $sql2 = "INSERT INTO trains SET t_no='$t_no',t_name='$t_name',t_source='$t_source',t_destination='$t_destination',t_duration='$t_duration',A3='$A3',SL='$SL',SS='$SS'";

        $fire=($conn->query($sql2));
        // mysqli_query($conn, $sql)


        if($fire)
        {  
            $message = "New Train Registration Successfull";
        }
        else
        {  
            $message = "Train No. already registered"; 
        }
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
?>


<HTML>
<HEAD>
<TITLE>Indian Railways</TITLE>
<style type="text/css">
@import url(style.css);
#logo	{ 
	border-radius: 25px;
    border: 1px solid blue; 
    width: 100px;
    height: 100px; 
}
*	{
	color: white;
}
html { 
  background: url(img/bg7.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:1200px;
		height: 500px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		border-radius: 25px;
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>
</HEAD>
<BODY>
	<?php 
		// session_start();
		// if(!(isset($_SESSION['admin_info'])))
		// {
		// 	header("location: admin.php");
		// }
		include("panel_header.php");
	?>
	<div id="main">
		<div id="logo">
			<A HREF="index.php">
			<IMG SRC="img/logo.png" alt="Home" id="logo" width="150" height="150"></IMG>
			</A>
		</div>
		<h1 align="center">Welcome to Indian Railways!</h1><br/><br/><br/>
        <h2 align="center">Add Train</h2>
		
		<form action="add_train.php" method="post">
            <label for="t_no">Enter train Number :</label>
            <input type="number" name="t_no" style="color:black;" id="t_no">
            <br>
            <label for="t_name">Enter train Name :</label>
            <input type="text" name="t_name" style="color:black;" id="t_name">
            <br>
            <label for="t_source">Enter train Source :</label>
            <input type="text" name="t_source" style="color:black;" id="t_source">
            <br>
            <label for="t_destination">Enter train Destination :</label>
            <input type="text" name="t_destination" style="color:black;" id="t_destination">
            <br>
            <label for="t_duration">Enter travel Duration :</label>
            <input type="number" name="t_duration" style="color:black;" id="t_duration">
            <br>
            <label for="A3">Enter Total seats in 3A :</label>
            <input type="number" name="A3" style="color:black;" id="A3">
            <br>
            <label for="SL">Enter Total seats in SL :</label>
            <input type="number" name="SL" style="color:black;" id="SL">
            <br>
            <label for="SS">Enter Total seats in SS :</label>
            <input type="number" name="SS" style="color:black;" id="SS">
            <br>

            <input type="submit" value="ADD" class="button" style="color:black;" name="submit1">
        </form>

            <form action="panel.php" method="post">
                <input type="submit" style="color:black;" value="BACK">
            </form>

	</div>			
</BODY>
</HTML>