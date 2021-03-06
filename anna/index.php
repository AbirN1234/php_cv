<!DOCTYPE html>
<html lang="en">
<head>
    <title>Annaprashon.com</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    
    <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="clr" style="background-image: radial-gradient(red 5%, yellow 15%, green 60%);">

    <!-- <nav class="navbar navbar-expand-sm  navbar-dark justify-content-center">
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      		<span class="navbar-toggler-icon"></span>
    	</button>
    	<div class="collapse navbar-collapse" id="collapsibleNavbar">
      	<ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link disabled" href="#">Home</a>
                </li>       
                <li class="nav-item">
                  <form class="form-inline" action="">
                      <input class="form-control mr-sm-2" type="text" placeholder="Search">
                      <button class="btn btn-warning" type="submit">Search</button>
                    </form>           
                </li>           
      	</ul> 
    	</div>
    </nav> -->
    
<!-- NAVBAR -->

    <nav class="navbar navbar-expand-sm navbar-dark " style="">
        <a class="navbar-brand" href="#">Annaprashan</a>
          
        <button class="navbar-toggler justify-content-right"  type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    		<span class="navbar-toggler-icon "></span>
        </button>
        
        <div class="collapse navbar-collapse "  id="collapsibleNavbar">
          	<div class="container-fluid" >
          
				<ul class="navbar-nav ">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Venue</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Catterer</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Decorators</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Purohit</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">About</a>
					</li>
					<li class="nav-item">
						<form class="form-inline" action="">
							<div class="input-group navbar-expand-md">
								<select class="dropdown ">
									<option class="dropdown-item" href="#">All</option>
									<option class="dropdown-item" href="#">Venues</option>
									<option class="dropdown-item" href="#">Cards</option>
								</select>
								<input class="form-control " type="text" placeholder="Search">
								<button class="btn btn-warning" type="submit"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fa fa-user"> Login</i></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"> Orders</a>
					</li>
					<li class="nav-item active">
						<a class="nav-link" href="#"><i class="fa fa-shopping-cart"> Cart</i></a>
					</li>
				</ul>
	        </div>
    	</div>  
	</nav>



      <!-- CAROUSEL -->
      
	<div style="width:100%;height: 300px;">

    	<img class="mySlides" src="img/pic_8.jpg" style="width:100%;height: 350px;">
		<img class="mySlides" src="img/pic_11.jpg" style="width:100%;height: 350px;">
		<img class="mySlides" src="img/pic_9.jpg" style="width:100%;height: 350px;">
		<img class="mySlides" src="img/pic_11.jpg" style="width:100%;height: 350px;">

					<!-- <a class="carousel-control-prev" href="#" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#" data-slide="next">
					<span class="carousel-control-next-icon"></span>
					</a> -->
					<!-- <div class="content">
					<h1><i>Annaprashan</i></h1>
					<h2 style="color: rgb(62, 231, 223);">First Rice-eating Ceremony.</h2>
					</div> -->
  	</div>

	<script>
		var myIndex = 0;
		carousel();

			function carousel() {
			var i;
			var x = document.getElementsByClassName("mySlides");
			for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";  
			}
			myIndex++;
			if (myIndex > x.length) {myIndex = 1}    
			x[myIndex-1].style.display = "block";  
			setTimeout(carousel, 3000); // Change image every 3 seconds
		}
	</script>

<br><br><br>

		<!-- Slider container -->

    <div class="container">
		<div class="row" >
			<div class="col-md-4">
				<!-- <img src="img/pic_2.jpg" alt="" style="width:100%;height: 500px;">
				<div class="tex1">
					<h2 class="venu"><u>Venue</u></h2>
					<ul class="ab">
						<li><a href="#">Venue</a></li>
						<li><a href="#">Venue</a></li>  
						<li><a href="#">Venue</a></li>  
						<li><a href="#">Venue</a></li> 
						<li><a href="#">Venue</a></li>
						<li><a href="#">Venue</a></li>  
						<li><a href="#">Venue</a></li>  
						<li><a href="#">Venue</a></li>                         
					</ul>
				</div> -->
				<div class="bd-example">
				<div id="carousel1" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Venue</u></h2>
					<ol class="carousel-indicators">
					<li data-target="#carousel1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel1" data-slide-to="1"></li>
					<li data-target="#carousel1" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					<div class="carousel-item active" data-interval="3000" >
						<a href="#">
						<img src="img/venue1.jpg" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
							<h5>Taj Bengal</h5>
							<p>Kolkata</p>
						</div>
						</a>
					</div>
					<div class="carousel-item" data-interval="3000">
						<a href="#">
						<img src="img/pic_6.jpg" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
							<h5>Torsha Complex</h5>
							<p>ASD</p>
						</div>
						</a>
					</div>
					<div class="carousel-item" data-interval="3000">
						<a href="#">
						<img src="img/pic_8.jpg" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:yellow;">
							<h5>Anna</h5>
							<p>Any where</p>
						</div>
						</a>
					</div>
					</div>
					<a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
					</a>
				</div>
				</div>
			</div>
			<div class="col-md-4">
			<div class="bd-example">
				<div id="carousel2" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Photography</u></h2>
				<ol class="carousel-indicators">
					<li data-target="#carousel2" data-slide-to="0"></li>
					<li data-target="#carousel2" data-slide-to="1"></li>
					<li data-target="#carousel2" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item"  data-interval="3000">
					<a href="">
						<img src="img/pic_4.png" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Photo smart</h5>
						<p>Chennai</p>
						</div>
					</a>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/venue1.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Torsha photography</h5>
						<p>ASD</p>
					</div>
					</div>
					<div class="carousel-item active" data-interval="3000">
					<img src="img/pic_6.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:yellow;">
						<h5>Annaprashon</h5>
						<p>Any where</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel2" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel2" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
			</div>
			<div class="col-md-4">
			<div class="bd-example">
				<div id="carousel3" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Food</u></h2>
				
				<ol class="carousel-indicators">
					<li data-target="#carousel3" data-slide-to="0" class="active"></li>
					<li data-target="#carousel3" data-slide-to="1"></li>
					<li data-target="#carousel3" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active" data-interval="3000">
					<img src="img/food_1.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:#21EF36;">
						<h5>Bengal caterers</h5>
						<p>Kolkata</p>
					</div>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/food_2.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:#21EF36;">
						<h5>Bengal caterers</h5>
						<p>Baruipur</p>
					</div>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/food_3.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:#21EF36;">
						<h5>Annaprashon caterers</h5>
						<p>Any where</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel3" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel3" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
			</div>
		</div>

			<br><br>

		<div class="row">
			<div class="col-md-4">
			<div class="bd-example">
				<div id="carousel4" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Purohit</u></h2>
				<ol class="carousel-indicators">
					<li data-target="#carousel4" data-slide-to="0" class="active"></li>
					<li data-target="#carousel4" data-slide-to="1"></li>
					<li data-target="#carousel4" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active"  data-interval="3000">
					<a href="">
						<img src="img/pic_4.png" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Photo smart</h5>
						<p>Chennai</p>
						</div>
					</a>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/venue1.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Torsha photography</h5>
						<p>ASD</p>
					</div>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/pic_6.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:yellow;">
						<h5>Annaprashon</h5>
						<p>Any where</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel4" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel4" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
			</div>
			<!-- <div class="col-md-4">
			<img src="img/pic_5.png" alt="" style="width:100%;height: 500px;">
			<div class="tex4">
				<h2 class="venu"><u>Ponjika</u></h2>
				<ul class="ab">
				<li><a href="#">calender</a></li>
				<li><a href="#">calender</a></li>  
				<li><a href="#">calender</a></li>  
				<li><a href="#">calender</a></li> 
				<li><a href="#">calender</a></li>
				<li><a href="#">calender</a></li>  
				<li><a href="#">calender</a></li>  
				<li><a href="#">calender</a></li>                 
				</ul>
			</div>
			</div> -->
			<div class="col-md-4">
			<div class="bd-example">
				<div id="carousel5" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Invitation Card</u></h2>
				<ol class="carousel-indicators">
					<li data-target="#carousel5" data-slide-to="0"></li>
					<li data-target="#carousel5" data-slide-to="1"></li>
					<li data-target="#carousel5" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item"  data-interval="3000">
					<a href="">
						<img src="img/pic_4.png" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Photo smart</h5>
						<p>Chennai</p>
						</div>
					</a>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/venue1.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Torsha photography</h5>
						<p>ASD</p>
					</div>
					</div>
					<div class="carousel-item active" data-interval="3000">
					<img src="img/pic_6.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:yellow;">
						<h5>Annaprashon</h5>
						<p>Any where</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel5" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel5" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
			</div>
			<!-- <div class="col-md-4">
			<img src="img/img_3.jpg" alt="" style="width:100%;height: 500px;">
			<div class="tex5">
				<h2 class="venu"><u>Available Purohit</u></h2>
				<ul class="ab">
				<li><a href="#">Ram Chaterjee</a></li>
				<li><a href="#">Sham Chaterjee</a></li>  
				<li><a href="#">Jadu Chaterjee</a></li>  
				<li><a href="#">Madhu Chaterjee</a></li> 
				
				</ul>
			</div>
			</div> -->
			<div class="col-md-4">
			<div class="bd-example">
				<div id="carousel6" class="carousel slide" data-ride="carousel">
				<h2 class="venu"><u>Gift shop</u></h2>
				<ol class="carousel-indicators">
					<li data-target="#carousel6" data-slide-to="0" class="active"></li>
					<li data-target="#carousel6" data-slide-to="1"></li>
					<li data-target="#carousel6" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active"  data-interval="3000">
					<a href="">
						<img src="img/pic_4.png" class="d-block w-100" style="height:250px;" alt="...">
						<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Photo smart</h5>
						<p>Chennai</p>
						</div>
					</a>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/venue1.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:red;">
						<h5>Torsha photography</h5>
						<p>ASD</p>
					</div>
					</div>
					<div class="carousel-item" data-interval="3000">
					<img src="img/pic_6.jpg" class="d-block w-100" style="height:250px;" alt="...">
					<div class="carousel-caption d-none d-md-block" style="color:yellow;">
						<h5>Annaprashon</h5>
						<p>Any where</p>
					</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel6" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel6" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
			</div>
			<!-- <div class="col-md-4">
			<img src="img/pic_5.png" alt="" style="width:100%;height: 500px;">
			<div class="tex6">
				<h2 class="venu"><u>Invitation Card</u></h2>
				<ul class="ab">
				<li><a href="#">shop</a></li>
				<li><a href="#">shop</a></li>  
				<li><a href="#">shop</a></li>  
				<li><a href="#">shop</a></li> 
				<li><a href="#">shop</a></li>
				<li><a href="#">shop</a></li>  
				<li><a href="#">shop</a></li>  
				<li><a href="#">shop</a></li>                 
				</ul>
			</div>
			</div> -->
			
		</div>

      <br><br> 

		<h1 style="color: rgb(255, 255, 255);text-align: center;"><i>Other Facilities</i></h1>
		<div class="row">
			<div class="col-md-3">
			<div class="box1">
				<h2 style="text-align:center;"><a href="#">Flower's Shop</a></h2>
			</div>
			</div>
			<div class="col-md-3">
			<div class="box2">
				<h2 style="text-align:center;"><a href="#">Doll's Shop</a></h2>
			</div>
			</div>
			<div class="col-md-3">
			<div class="box3">
				<h2 style="text-align:center;"><a href="#">Jwellery Shop</a></h2>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box4">
				<h2 style="text-align:center;"><a href="#">Baby's set</a></h2>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box8">
				<h2 style="text-align:center;"><a href="#">Courier</a></h2>
				</div>
			</div>
			<div class="col-md-3">
				<div class="box5">
				<h2 style="text-align:center;"><a href="#">Grocery Shop</a></h2>
				</div>
			</div>
			<div class="col-md-3">
			<div class="box6">
				<h2 style="text-align:center;"><a href="#">Dasha karma</a></h2>
			</div>
			</div>
			<div class="col-md-3">
			<div class="box7">
				<h2 style="text-align:center;"><a href="#">Decora tors</a></h2>
			</div>
			</div>


		</div>

		<!-- background-color: rgb(19, 155, 218); -->
    </div>
      
<br><br><br><br>

		<!-- create account -->

    <!-- <div class="container" style="background-color: rgb(218, 148, 19);">
      <div class="row">
        <div class="col-md-12">
            <center><h1 style="color: rgb(53, 31, 182);">Create an account</h1></center><br>
            <form action="" method="POST">
              <div class="row register-form justify-content-center">
                      <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" style="height: 40px;" placeholder="Full name" value="" required/>
                        </div>
                        <div class="form-group">
                          <input type="number" name="" class="form-control" style="height: 40px;" placeholder="Mobile no" value="" required/>
                      </div>
                      <div class="form-group">
                        <input type="password" name="" class="form-control" style="height: 40px;" placeholder="Password" value="" required/>
                    </div>
                      </div>
                
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="email" name="pass"  class="form-control" style="height: 40px;" placeholder="Email" value="" required />
                        </div>
                        <div class="form-group">
                          <input type="text" name="" class="form-control" style="height: 40px;" placeholder="Full Address" value="" required/>
                        </div>
                        <div class="form-group">
                          <input type="password" name="" class="form-control" style="height: 40px;" placeholder="Confirm-password" value="" required/>
                        </div>
                    </div>
                      <div class="col-md-8">
                        <br><center><input type="submit" style="font-size: 25px;" class="btn btn-success form-control"  value="Sign-Up" name="button" /></center><br>                     
                      </div>
                      <div class="col-md-5">
                      <h3> Already a member ? <a href="#">Login</a></h3>
                      </div>
              </div>
          </form>  
        </div>
      </div> 
    </div>

	<br><br> -->

<!-- <br><br><br> -->



     <!-- Photo Gallery -->

	<div class="" style="background-color: rgb(173, 22, 153);">
		<div class="container">
			<h2 class="venu"><u>Photo Gallery</u></h2>

			<div class="row">
				<div class="col-md-4">
					<div class="grayBox" style="height: 300px;width: 100%;">
					</div>
				</div>
				<div class="col-md-4">
					<div class="grayBox" style="height: 300px;width: 100%;">
					</div>
				</div>
				<div class="col-md-4">
					<div class="grayBox" style="height: 300px;width: 100%;">
					</div>
				</div>
			</div> 
		</div>
	</div>

		<br><br><br><br>

		<!-- registration form -->

		<!-- <div class="" style="background-color: rgb(22, 149, 192);">
			<h1 style="color: darkorange;text-align: center;"><i>Are you attending ?</i></h1>
			<form action="" method="POST">
			<div class="row register-form justify-content-center">
					<div class="col-md-4">
						<div class="form-group">
							<h2 style="color: honeydew;">Name </h2>
							<input type="text" name="name" class="form-control" style="height: 50px;" placeholder=" Name" value="" required/>
						</div>
						<div class="form-group">
						<h2 style="color: honeydew;">Number of Guest</h2>
						<select name="" class="form-control" style="height: 50px;" required>
							<option value="">Please chose</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
					</div>
				
					<div class="col-md-4">
						<div class="form-group">
						<h2 style="color: honeydew;">Email</h2>
							<input type="email" name="pass"  class="form-control" style="height: 50px;" placeholder="Email" value="" required />
						</div>
						<div class="form-group">
						<h2 style="color: honeydew;">Atteding the events </h2>
						<select name="" class="form-control" style="height: 50px;" required>
							<option value="">Please chose</option>
							<option value="Event1">Event1</option>
							<option value="Event2">Event2</option>
						</select>
						</div>
					</div>
					<div class="col-md-6">
					<h2 style="color: honeydew;">Message </h2>
					<textarea name="message" placeholder="Message" class="form-control" style="height: 100px;" required></textarea>
					</div>
					<div class="col-md-8">
						<br><center><input type="submit" style="font-size: 25px;" class="btn btn-warning"  value="I am attending" name="button" /></center><br>                     
					</div>
			</div>
			</form>  
		</div> -->

		<!-- Footer -->

	<footer class="site-footer footer-opt-7" style="background-color:#665099;color:white;">
		<div class=" container">
		<div class="footer-column">
			<div class="row">
			
			<div class="col-md-12 col-lg-3 col-xs-12 col col-sm-3">
			<div class="footer-top">
				<strong class="logo-footer">
				<a href="#"><img src="#" alt="logo"></a>
				</strong>
			</div>
			</div>

			<div class="col-md-3 col-lg-2 col-xs-4 col-sm-3">
			<h3 class="title">Quick Links</h3><ul class="links">
		<li><a href="#">Terms & Conditions</a>
		</li>
		<li><a href="#">Privacy Policy</a>
		</li>
		</ul>
		</div>

		<div class="col-md-3 col-lg-3 col-xs-4 col-sm-3 col-md-offset-1">
		<h3 class="title">Contact</h3><table class="address">
		<tr>
		<td class="text-label"><i class="fa fa-map-marker" aria-hidden="true"></i></td>
		<td>Balarampur, Baruipur, Kol-700144</td>
		</tr>
		<tr>
		<td class="text-label"><i class="fa fa-phone" aria-hidden="true"></i></td>
		<td><a href="tel:# , #">0000000000 , 1111111111</a></td>
		</tr>
		<tr>
		<td class="text-label"><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
		<td><a href="mailto:#"> asd@gmail.com</a></td>
		</tr>
		</table>
		</div>

		<div class="col-md-3 col-lg-3 col-xs-4 col-sm-3 col">
		<div class="block-social">
		<div class="block-title">Let’s Socialize</div>
		<div class="block-content"> 
		<a href="https://www.facebook.com" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<a href="https://www.twitter.com" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<a href="https://www.accounts.google.com" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		</div>
		</div>
		</div>

		</div>
		</div>
		</div>
		<div class="footer-bottom">
		<div class="container">
		<div class="copyright">Copyright © annaprashan. All Rights Reserved. Designed & Developed by <a href="#" rel="nofollow" target="_blank">GMIT_CSE</a>
		</div>
		</div>
		</div>
		<script type='text/javascript'>
		/* <![CDATA[ */
		var wpcf7 = {"apiSettings":{"root":"https:\/\/www.c2c365.in\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
		/* ]]> */
		</script>
		<!-- <script type='text/javascript' src='https://www.c2c365.in/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.6'></script>
		<script type='text/javascript' src='https://www.c2c365.in/wp-includes/js/wp-embed.min.js?ver=5.1.4'></script> -->
	</footer>


</body>
</html>