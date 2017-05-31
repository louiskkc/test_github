<?php

	session_start();
    include 'connection.php';

     if(isset($_COOKIE["passed"]))
  {
    $passed = $_COOKIE["passed"];
    $user_id = $_COOKIE["user_id"];
    $premium = $_COOKIE["premium"];
    $username = $_COOKIE["username"];
    //if cookies is not set, it means the user not yet login
  if ($passed != "TRUE")
  {
    header("location:Home.php");
    exit();
  }
    
  }
  else
  {
    $message = "You have not logged in the system. Please try again.";
    echo "<script type='text/javascript'>alert('$message');</script>";
    //header("location:index.php");
    echo "<script>setTimeout(\"location.href = 'Home.php';\",100);</script>";
    exit();
  }

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatitle" content="IE=edge, chrome=1" />
		<title>Plans for Premium Account - Start-Biz</title>

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<meta name="description" content="Choose premium account to enhance your chance of success on start-up project." />

  		</style>
	</head>
	<body>
        <!-- Navbar -->
<nav class="navbar navbar-default ">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     <a class="nav navbar-nav navbar-left" href="#" ><img src="2.jpg" width="10%" height="10%"></a>
     
    </div>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
        <!-- <a class="nav navbar-nav navbar-left" href="#" ><img src="2.jpg" width="10%" height="10%"></a>-->
          <ul class="nav navbar-nav navbar-right">
            <li><?php  if(isset($_COOKIE["passed"])) {echo "Hello $username";}?></li>   
            <li><a data-target="#profile" href="profile_page.php">MY PROFILE</a></li>
            <li><a data-target="#upgrade" href="plan_pricing.php">UPGRADE</a></li>
            <li><a data-target="#logout" href="logout.php">LOGOUT</a></li>

            
          </ul>
    </div>
</nav>
        <div class="container">

            <div class="page-header">
                <h1>Pricing Tables</h1>
            </div>

            <!-- Pricing Tables - START -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h4 class="text-center">Free Account</h4>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong>$0 / month</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    Criteria Search
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    -
                                
                                </li>
                                <li class="list-group-item">
                                    -
                                
                                </li>
                                <li class="list-group-item">
                                    -
                                
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-success" style="color: white;">You are now in Free Account.</a>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-md-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="text-center">Premium Account</h4>
                            </div>
                            <div class="panel-body text-center">
                                <p class="lead">
                                    <strong>$20 / month</strong>
                                </p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item">
                                    Criteria Search
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Keyword Content Search
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Project & People Recommendation
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                                <li class="list-group-item">
                                    Project Trend Analysis
                                    <span class="glyphicon glyphicon-ok pull-right"></span>
                                </li>
                            </ul>
                            <div class="panel-footer">
                                <a class="btn btn-lg btn-block btn-primary" style="color: white;" href="./stripe-payment-gateway-php/index.php">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Pricing Tables - END -->

        </div>
        <footer class="container-fluid bg-3 text-center">
  <p>© 2017 START-BIZ</p> 
</footer>
<div class = "container">
<div class="site-footer-nav row">
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>About START-BIZ</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="About us.html">Who we are</a></li>
                        <li><a href="https://resources.goanimate.com/careers/">Careers</a></li>
                        <li><a href="https://goanimate.com/contactus">Contact Us</a></li>
                        <li><a href="https://blog.goanimate.com">Blog</a></li>
                        <li><a href="https://press.goanimate.com">Press</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>GoAnimate Solutions</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="https://goanimate.com/business/videoplans?hook=footer_button.site">Plans and Pricing</a></li>
                        <li><a href="https://goanimate.com/business/videoplans/federal?hook=footer_button.site">Plans for Federal Agencies</a></li>
                        <li><a href="https://goanimate4schools.com" target="_blank">GoAnimate for Schools</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4><span>Usage Guidelines</span></h4>
                    <ul class="list-unstyled">
                        <li><a href="terms.php">Terms of Use</a></li>
                        <li><a href="https://goanimate.com/privacy">Privacy Policy</a></li>
                        <li><a href="//support.goanimate.com/hc/en-us/articles/202408574" target="_blank">Cancellation Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="site-footer-nav-col">
                    <h4>Getting Help</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://resources.goanimate.com">Resources</a></li>
                        <li><a href="https://support.goanimate.com">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	</body>
</html>
