<?php 
$valid = true;

function validatestrings($str, $required = true){
  global $valid;
  //convert possiblr malicious code to safe code
  $str=htmlspecialchars($str);
  //trim empty spaces start and end
  $str=trim($str);

  if (empty($str) && $required){
    $valid = false;
  }
  return $str;
}

// print_r($_POST);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	$name=validatestrings($_POST["name"]);
	$email=validatestrings($_POST["email"]);
	$phone=validatestrings($_POST["phone"]);
	$message=validatestrings($_POST["message"]);
if ($valid){
  $new_line="\n";
  $new_line.="$name, $email, $phone, $message";

  file_put_contents("contact.csv", $new_line, FILE_APPEND);
}
  
}
$file = file_get_contents("contact.csv");
$label_rows = str_getcsv($file, "\n");
?>

<!DOCTYPE html>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeria Sassi Website</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-home.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/prefixfree.min.js"></script>
</head>
<body>
	<header>
	  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#featured"><h1>Valeria Sassi <span class="subhead"> Portfolio</span></h1></a>
	      </div><!-- navbar-header -->
	      <div class="collapse navbar-collapse" id="collapse">
	        <ul class="nav navbar-nav navbar-right">
	          <li class="active"><a href="#featured">Work</a></li>
	          <li><a href="#about">About</a></li>
	          <li><a href="#contact">Contact</a></li>
	          <li><a href="resume.html">Resume</a></li>
	        </ul>        
	      </div><!-- collapse navbar-collapse -->
	    </div><!-- container -->
	  </nav><!-- </nav> -->
	</header>
		<div class="page" id="featured">
			<div class="container">
				<h2>Work</h2>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<a href="http://iaminspiredmsp.com/" target="_blank">
	            			<img  src="images/i-am-inspired-website.jpg" class="img-responsive">
	          			</a>
			            <p class="intro">this is the intro</p></br>
								           
				            <p class="mrgn-lft">Here goes project description.</br>gdsfkj dskjhf dkjfhksduf  udsify ds ds fh ufjhdui yeiufy odsiuyf  iudsyfui ds fuiydsou fisu iurydf ireuy iuryf iraeyoufgip adyuif y'ua yiuaerou  eya ui ioesrwutre wrtew yptiu yiuwp rtyuire yit rey pwouty ureiwpytou uperywt opure wyt ourepw</p>
				            <p class="proj-descr">iuhdrfi reshiuyh iu</p>
				        
				       
	        		</div>
	        		<div class="col-lg-6 col-md-6">
						<a href="http://valeriasassi.us/IM2460/bookClubPoll/index.php" target="_blank">
	            			<img  src="images/book-club-pool.jpg" class="img-responsive">
	          			</a>
			            <p class="intro">this is the intro</p></br>
			            <p class="mrgn-lft">Here goes project description.</br>gdsfkj dskjhf dkjfhksduf  udsify ds ds fh ufjhdui yeiufy odsiuyf  iudsyfui ds fuiydsou fisu iurydf ireuy iuryf iraeyoufgip adyuif y'ua yiu aerfghou  eya ui ioesrwutre wrtew yptiu yiuwp rtyuire yit rey pwouty ureiwp ytou ghuper ywt opure wyt ourepw</p>
			            <p class="proj-descr">iuhdrfi reshiuyh iu</p>
	        		</div>
	        		<div class="col-lg-6 col-md-6">
						<a href="http://iaminspiredmsp.com/" target="_blank">
	            			<img  src="images/farr-publications.jpg" class="img-responsive">
	          			</a>
			            <p class="intro">this is the intro</p></br>
			            <p class="mrgn-lft">Here goes project description.</br>gdsfkj dskjhf dkjfhksduf  udsify ds ds fh ufjhd ui yeiufy odsiuyf  iudsyfui ds fuiydsou fisu iurydf ireuy iuryf iraeyouf gip adyuif y'ua yiua erou  eya ui ioesrwutre wrtew yptiu yiuwp rtyuire yit rey pwouty ureiwpy dfg tou uperywt opure wyt ourepw</p>
			            <p class="proj-descr">iuhdrfi reshiuyh iu</p>
	        		</div>
	        		<div class="col-lg-6 col-md-6">
						<a href="http://valeriasassi.us/IM2460/bookClubPoll/index.php" target="_blank">
	            			<img  src="images/book-club-pool.jpg" class="img-responsive">
	          			</a>
			            <p class="intro">this is the intro</p></br>
			            <p class="mrgn-lft">Here goes project description.</br>gdsfkj dskjhf dkjfhksduf  udsify ds ds fh ufjhdui yei ufy odsi uy f iudsyfui ds fuiy dsou fisu iurydf ireuy iuryf iraeyo ufgip adyuif y'ua yi uaerou  eya ui ioesrw utre wrtew yptiu yiuwp rtyuire yit rey pwouty ureiwpy tou up erywt opure wyt ourepw</p>
			            <p class="proj-descr">iuhdrfi reshiuyh iu</p>
	        		</div>
				</div><!-- row 2 -->
			</div><!-- Container -->
		</div><!-- page work -->

		<div class="page" id="about">
			<div class="container">
				<h2>About</h2>
				<div class="row">
					<article>
						<p>Always craving the opportunity to design new processes.</br>Enjoy applying technical knowledge to projects in creative ways.</br>Avid explorer of new cultures and traveler with family and friends.</p>
					</article>
				</div>
			</div>
		</div><!-- page about -->

		<div class="page" id="contact">
			<div class="container">
				<h2>Contact</h2>
				<?php 
		              if (!$valid){
		                echo "<h3>Please check the information below</h3>";
		              }
		            ?>
				<div class="row">
					<!-- <div class="col-md-12"> -->
						<form action="" method="POST" class="form form-inline">
							<div class="col-md-5 ">
							  	<div>
									<label class=" sml-plc">Name</label>
									<input type="text" name="name" class=" input-txt" placeholder="First and last, please" required="true" />
							    </div>
							    <div>
									<label class=" sml-plc">Email</label>
									<input type="email" name="email" class=" input-txt" placeholder="Enter email" required="true" />
							    </div>
							    <div>
									<label class=" sml-plc" >Phone</label>
									<input type="number" class=" input-txt" name="phone" placeholder="Enter your phone" required="true" />
								</div>
							</div>
							<div class="col-md-5 col-md-offset-2">
								<div >
									<label class="sml-plc">Message</label>
									<textarea name="message" rows="6" class="form-control" title="How can I help?" required="true"></textarea>
								</div>
								<div>
									<div class="botn">
									  <input class="btn btn-large" type="submit" class="checkoutButton" value="Submit"/>
									</div>
								</div>
							</div>
						</form>
					<!-- </div>col-12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div> <!-- page -->
	<footer>
	    <div class="content container-fluid">
	      <div class="row">
	        <div class="col-sm-6">
	          <p>All contents &copy; 2015 
	            <a href="#featured">Valeria Sassi</a>. All rights reserved.
	          </p>    
	        </div><!-- col-sm-6 -->
	        <div class="col-sm-6">
	          <nav class="navbar navbar-default" role="navigation">
	            <ul class="nav navbar-nav navbar-right">
	              <a href="http://twitter.com/vcsassi" target="_blank" class="btn btn-social-icon btn-twitter">
	                <i class="fa fa-twitter"></i>
	              </a>
	               <a href="https://www.linkedin.com/in/valeriasassi" target="_blank" class="btn btn-social-icon btn-linkedin">
	                <i class="fa fa-linkedin"></i>
	              </a>
	            </ul>
	          </nav>        
	        </div><!-- col-sm-6 -->
	      </div><!-- row -->
	    </div><!-- content container -->
	</footer>
	<!-- javascript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>