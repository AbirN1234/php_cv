<?php 
session_start();
if(!(isset($_SESSION['user'])))
{
    header('Location: index.html');
}
?>

<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abir Naskar</title>
    <meta name="description" content="Creative CV is a HTML resume template for professionals. Built with Bootstrap 4, Now UI Kit and FontAwesome, this modern and responsive design template is perfect to showcase your portfolio, skils and experience."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body >
<!-- style="background-color:yellow;"
navbar-transparent -->
	<header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg  navbar-red bg-info"  color-on-scroll="400">
          <div class="container" >
            <div class="navbar-translate"><a class="navbar-brand" style="font-size: 15px;" href="profile.php" rel="tooltip"><img src="images/a.png" style="height: 50px;">BIR</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end " id="navigation">
              <ul class="navbar-nav">
                  <li class="nav-item"><a class="nav-link smooth-scroll" href="profile.php"><?php 
						if($_SESSION['user']!=NULL) 
						{  
							echo($_SESSION['user']); 
						}
					?></a></li>

				</a></li>
				<li class="nav-item">
					<a class="nav-link smooth-scroll bg-danger" style="font-size: 12px;" href="logout.php">
						Logout
					</a>
				</li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
	</header>
	

	<div class="section">
		<div class="container">
			<div class="row" >
				<div class="col-md-3  bg-success" style="text-align:center; height:100px">
						<form action="fetch.php" method="POST">
						    <label>Check all comments :</label><br>
						    <input type="submit" value="CHECK">
						    </form>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 bg-warning " style="text-align:center; height:100px">
						<!-- <label>Enter your name :</label><br> -->
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-3 bg-danger" style="text-align:center; height:100px">
						<!-- <label>Enter your name :</label><br> -->
				</div>
			</div>
		</div>
	</div>

</body>
</html>