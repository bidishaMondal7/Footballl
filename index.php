
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>football</title>
	<meta charset="utf-8">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" media="all">
	<link href="https://fonts.googleapis.com/css?family=Song+Myung" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bevan" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spinnaker" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	
	<link rel="stylesheet" type="text/css" href="style3.css">
	
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-success">
	<a class="navbar-brand display-1" href="#">
		<img src="img/logo.png" width="55px;" height="50px;">
		fOOtballworld
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Organisation</a>
			</li>

			<li class="nav-item">
				<a class="nav-link" href="#">Events</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#photo">Photos</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Register</a>
				<div class="dropdown-menu drp" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item btn btn-primary btn-lg" href="#" data-target="#login" data-toggle="modal" role="button">Login</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#sign" >Sign Up</a>
				</div></li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admin</a>
				<div class="dropdown-menu drp" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item  drp" href="#about">About Us</a>
					<div class="dropdown-divider"></div>
					<a  class="dropdown-item drp" href="#" data-target="#cont" data-toggle="modal">Contact Us</a>
				</div>
			</li>
						
		</ul>
		<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="search" name="" placeholder="search" aria-label="search">
		    
		</form>
	</div>
	
  
</nav>
<!--modal window -->
<div class="modal fade" id="login">
	<div class="modal-dialog">
		<div class="modal-content mod1">
			<div class="modal-header text-center">
				<span class="display-4">Login Here</span>
			</div>
			<div class="">
				<form action="login.php" method="POST">
					<div class="modal-body">				
						<span class="mod">UserID/firstname</span></br>
						<input type="text" class="mod" placeholder="user ID" name="name" required></br>
						<span class="mod">Password</span></br>
						<input type="password"  class="mod" placeholder="password" name="pass" required></br>
						
					</div>
					<div class="modal-footer" style="align-items: left;">
					
					<div class="row">
					<div class="col-sm-6">
						<input type="radio" value="ok" name="">Remind me</br>
					</div>
					<div class="col-sm-6">
						<button class="btn btn-info btn-block" type="submit" name="login">login</button>
						</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div><!--modal login-->

<!--contact us-->
<div class="modal fade" id="cont">
	<div class="modal-dialog">
		<div class="modal-content cont1">
			<div class="modal-header text-center">
				<span class="display-4">Contact Us</span>
			</div>
			<div class="">
				<form>
					<div class="modal-body">
						<span class="mod2">Name</span></br>
						<input type="text"  class="mod2" placeholder="Name" name="" required></br>
										
						<span class="mod2">UserID/email</span></br>
						<input type="text" class="mod2" placeholder="user ID" name="" required></br>
						<span class="mod2">Message</span></br>
						<div class="">
						<input type="text"  class="mod2 com" placeholder="Comments..." name="" required></br>
						</div>
					</div>
					<div class="modal-footer" style="align-items: left;">
					
					<div class="row">
					
					<div class="col-sm-12">
						<button class="btn btn-info btn-block" type="submit">Submit</button>
						</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
<!--contact us ends->


<!--carousel-->
<div class="container con">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li class="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li class="#carouselExampleIndicators" data-slide-to="1"></li>
		<li class="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		 <div class="carousel-item active" style="padding-left: 20px;  padding-right: 20px;">
      		<img class="d-block w-100" src="img/25.jpeg"  style="height: 550px;" alt="First slide">
      		<div class="carousel-caption d-none d-md-block">
    			<h5>holla</h5>
    			<p>huli</p>
  			</div>
    	</div>
	

	
		<div class="carousel-item" style="padding-left: 20px;  padding-right: 20px;">
		      <img class="d-block w-100" src="img/26.jpg" style="height: 550px;" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
   				 <h5>hollluuu</h5>
    				<p>.hgjfgjg</p>
  			  </div>
    	</div>
	
		
		<div class="carousel-item" style="padding-left: 20px;  padding-right: 20px;">
		      <img class="d-block w-100" src="img/30.jpg" style="height: 550px;" alt="First slide">
		      <div class="carousel-caption d-none d-md-block">
    			<h5>...gyjhvbvhj</h5>
    			<p>bola...</p>
  			  </div>
    	</div>
	
	</div>
	</div>
	
</div>
<!--carousel ends-->
<!--home-->
<section id="home">
<div class="container history  text-center">
	<div class="display-2 text-center">Football In India</div>
	<p>Football is a popular sport in India.Football has enjoyed popularity in West Bengal, Goa, Kerala, and north-eastern India which consists of Assam, Manipur, Meghalaya, Mizoram, Nagaland, Tripura, Arunachal Pradesh and Sikkim.</br>

India's current top domestic league, I-League, was formed in 2007 in an attempt to professionalize domestic football and in 2013 the Indian Super League was formed with 8 teams to promote Indian football to the country and world.[5] Also contested is Santosh Trophy, a knock-out competition between states (provinces) and government institutions. The current captain of the Indian national team is Sunil Chhetri and the team is coached by Stephen Constantine. India is currently ranked 97 among the FIFA World Rankings.</br>

The 2017 FIFA U-17 World Cup was hosted by India in the month of October in 2017 and the first time the country had hosted a FIFA event.The tournament was touted as the most successful FIFA U-17 World Cup ever, with the attendance being a record 1,347,133 surpassing China's 1985 edition where it was 1,230,976. Owing to this, India has also bid to host the 2019 FIFA U-20 World Cup.</p>
</div>
</section>
<!--end home-->
<!--sign up-->

	<form class="container con1" id="sign" action="signup.php" method="POST">
	<h1 class="display-4 text-center">Profile Creation</h1></br>
		<div class="form-group row">
			<label for="inputFirstName" class="col-sm-2 form-label">First Name</label>
			<div class="col-sm-4">
			<input type="text" class="form-control" id="inputFirstName" value="" name="fName" placeholder="First Name">
			</div>
			<label for="inputLastName" class="col-sm-2 form-label">Last Name</label>
			<div class="col-sm-4">
			<input type="text" class="form-control" id="inputLastName" value="" name="lName"placeholder="Last Name">
			</div>
		</div>

		<div class="form-group row">
		<label for="Address" class="col-sm-2 form-label">Address</label>
			<div class="col-sm-4">
			<input type="text" class="form-control add" id="Address" value="" name="add"placeholder="Address">
			</div>
		</div>
		<div class="form-group row">
			<label for="State" class="col-sm-2 form-label">State</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="State" value="" name="state" placeholder="State">
			</div>
		</div>
		<div class="divider"></div>
		<span class="head">Personal Details:</span></br></br>
		<div class="row form-group">
		<label for="age" class="col-sm-1 form-label">Age Group</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="age" value="" name="age" placeholder="age group">
			</div>

		<label for="height" class="col-sm-1 form-label">Height</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="height" value="" name="height" placeholder="Height">
			</div>

		<label for="weight" class="col-sm-1 form-label">Weight</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="weight" value="" name="weight" placeholder="Weight">
			</div>
	
		</div>
		<span class="head">Professional Details:</span></br></br>
		<div class="row form-group">
			<label for="locality" class="col-sm-2 form-label">Locality</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="locality" value="" name="locality" placeholder="Locality">
			</div>

			<label for="Division" class="col-sm-2 form-label">Division</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="division" value="" name="division" placeholder="division">
			</div>
			</div>
			<div class="row form-group">
			<label for="club" class="col-sm-2 form-label">Club</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="club" value="" name="club" placeholder="club">
			</div>

			<label for="trainer" class="col-sm-2 form-label">Trainer</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="trainer" value="" name="trainer" placeholder="trainer">
			</div>
		</div>

		<div class="row form-group">
			<label for="achievements" class="col-sm-2 form-label">Achievements</label>
			<div class="col-sm-4">
			<input type="text" class="form-control add" id="achievements" value="" name="achi" placeholder="If any">
			</div>
		</div>
			<div class="row form-group">
			<label for="trainer" class="col-sm-2 form-label">Password</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" id="pass" value="" name="password" placeholder="password">
			</div>
				</div>

			</div>
			<div class="text-center">
			<button class="btn btn-success btn-lg" name="signup">Submit Details</button></div>
	</form>
	<!--sign up ends-->
	<!-- galary-->
	<section id="photo">
	
	<h1 class="display-4 text-center">Photo Galary</h1>
		<div class="container galary">
		
			<div class="row">
				<div class="col-md-3">
					<a href="img/37.jpg" data-lightbox="galary" data-title="Captain Chetri in practice session"><img src="img/37.jpg"></a>
				</div>
				<div class="col-md-3">
						<a href="img/31.jpg"  data-lightbox="galary" data-title="Indian Team Winning the tri-nation series 2017" ><img src="img/31t.jpg" ></a>
				</div>
				<div class="col-md-3">
					<a href="img/32.jpg" data-lightbox="galary" data-title="I-League Champions MohanBagan"><img src="img/32t.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="img/34.jpg" data-lightbox="galary" data-title="Indian Under-17 Squad"><img src="img/34.jpg"></a>
				</div>
				
			</div>

			<div class="row">
				<div class="col-md-3">
					<a href="img/35.jpg" data-lightbox="galary" data-title="2K16 Champions Athletico de Kolkata"><img src="img/35t.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="img/20.jpg" data-lightbox="galary" data-title="Team coach Stephen Constantine with Captain Sunil Chetri"><img src="img/20.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="img/under14.jpg" data-lightbox="galary" data-title="Under_14 Indian junior team"><img src="img/under14t.jpg"></a>
				</div>
				<div class="col-md-3">
					<a href="img/navy1.jpg" data-lightbox="galary" data-title="Indian Navy winning the match"><img src="img/navyt.jpg"></a>
				</div>
			</div>
		</div>
	
	</section>




<!--galary ends-->
<!--about us-->
<section id="about">
	<div class="row">
		
	<div class="container align-self-center">
	<h1 class="display-4 text-center">About Us</h1>
	<div class="col-md-12">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4 align-self-center text-center ">
		<div class="card cd ">
		<div class="pic">
			<img class="card-img-top" src="img/me3.jpg" style="height: 300px;width:cover;"></div>
			<div class="card-block">
				<div class="card-title icons"><span class="h">
				Bidisha Mondal</span></br>
					<p>Student</p>
					</div>
				<div class=" row card-text icon">
					<div class="col-md-4 icon1">
					<img  src="img/git.png"></div>
					<div class="col-md-4 icon2">
					<img src="img/google.png"></div>
					<div class="col-md-4 icon3">
					<img src="img/face.png"></div>
					
				</div>
			</div>
		</div>
		</div>
			<div class="col-md-4"></div>
		</div>
		</div>
	</div>
	
</div>
</section>
<!--about us ends-->

</body>

	
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="lightbox2-master/dist/js/lightbox-plus-jquery.js"></script>

</html>