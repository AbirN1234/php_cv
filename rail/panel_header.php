<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li>
              <?php  
                if(isset($_SESSION['admin_info'])){
                  echo '<a href="logout.php"><div id="dropdown">'.$_SESSION['admin_info'].'<div id="Logout" style="display:none">Logout</div></a>';
                }
                else
                  echo '<A HREF="register.php">Login/Register</A>';
              ?>
            </li>
            <li><A HREF="logout.php">Logout</A></li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>