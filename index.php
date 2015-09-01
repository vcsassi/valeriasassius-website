<!doctype html>

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

function check_box_value($str) {
  global $valid;
  if(empty($str)) {
    return "no";
  } elseif($str == "yes") {
    return $str;
  } else {
    $valid = false;
    return "";
  }
}


// print_r($_POST);
if ($_SERVER["REQUEST_METHOD"]=="POST"){
  $email=validatestrings($_POST["email"]);
  // $allow_email=check_box_value(validatestrings($_POST["allow_email"], false));
  $name=validatestrings($_POST["name"]);
  // $last_name=validatestrings($_POST["last_name"]);
  // $address1=validatestrings($_POST["address1"]);
  // $address2=validatestrings($_POST["address2"], false);
  // $city=validatestrings($_POST["city"]);
  // $state=validatestrings($_POST["state"]);
  // $zip_code=validatestrings($_POST["zip_code"]);
  // $country=validatestrings($_POST["country"]);
  $phone=validatestrings($_POST["phone"]);
  // $is_biz_addr= check_box_value(validatestrings($_POST["is_biz_addr"], false));
  // $style=validatestrings($_POST["style"]);
  // $level=validatestrings($_POST["level"]);
  $text=validatestrings($_POST["text"]);
if ($valid){
  $new_line="\n";
  $new_line.="$email, $name, $phone, $text";

  file_put_contents("contact.csv", $new_line, FILE_APPEND);
}
  
}
$file = file_get_contents("contact.csv");
$quilt_rows = str_getcsv($file, "\n");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valeria Sassi Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="js/respond.js"></script>
	<script type="js/Gruntfile.js"></script>
</head>
<body>
	<header class="row">
	  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="#featured">Valeria Sassi <span class="subhead"> Portfolio</span></a>
	      </div><!-- navbar-header -->
	      <div class="collapse navbar-collapse" id="collapse">
	        <ul class="nav navbar-nav navbar-right">
	          <li class="active"><a href="#work">Work</a></li>
	          <li><a href="#about">About</a></li>
	          <li><a href="#contact">Contact</a></li>
	          <li><a href="resume.html">Resume</a></li>
	        </ul>        
	      </div><!-- collapse navbar-collapse -->
	    </div><!-- container -->
	  </nav><!-- </nav> -->
	</header>
	<!-- <div class="container"> -->
			  	    <!-- row 1 -->
	    <!-- <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="col-lg-9 col-md-9 col-sm-9">
					<h1>VALERIA SASSI</h1>
				</div>
				<div class="col-lg-3 col-md-3">
					<span class="contact">vcsassi@gmail.com<br>valeriasassi.us<br>952.544.0227</span>
				</div>
			</div>
		</div><! row 1 --> 
		<div class="page" id="work">

			<h2>Work</h2>
			<!-- 		row2 -->
			<div class="row">
				<div class="col-md-6 col-lg-3">
		            <span class="intro">this is the intro</span></br>
		            <span>Here goes project description.</br>gdsfkj dskjhf dkjfhksduf  udsify ds ds fh ufjhdui yeiufy odsiuyf  iudsyfui ds fuiydsou fisu iurydf ireuy iuryf iraeyoufgip adyuif y'ua yiuaerou  eya ui ioesrwutre wrtew yptiu yiuwp rtyuire yit rey pwouty ureiwpytou uperywt opure wyt ourepw</span>
		            <span class="customer">iuhdrfi reshiuyh iu</span>
        		</div>

			</div><!-- row 2 -->
		</div><!-- page work -->
		<div class="page" id="about">
			<div class="container">
				<h2>About</h2>
				<!-- 		row3 -->
				<div class="row">
					<article>
		          		<p>Always craving the opportunity to design new processes.</br>Enjoy applying technical knowledge to projects in creative ways.</br>Avid explorer of new cultures and traveler with family and friends.</p>
			        </article>
				</div><!-- row 3 -->
			</div>
		</div><!-- page about -->
		<div class="page" id="contact">
			
			<h2>Contact</h2>
			<!-- 		row4 -->
			<div class="container">
		      <div class="row">
		        <div class="col-md-12">
		          <main>
		            
		            <?php 
		              if (!$valid){
		                echo "<h3>Please check the information below</h3>";
		              }
		            ?>
		            <h1></h1>
					<form action="" method="POST">
						<div class="col-md-6">
							<div class="col-md-12">
							  	<div >
									<label class="col-md-12">Name</label>
									<input type="text" name="name" class="col-md-8 col-sm-8 col-lg-8" placeholder="Enter name" required="true" />
							    </div>
							    <div>
									<label class="col-md-12">Email</label>
									<input type="email" name="email" class="col-md-8 col-sm-8 col-lg-8" placeholder="Enter email" required="true" />
							    </div>
							    <div>
									<label class="col-md-12" >Phone</label>
									<input type="text" class="col-md-8 col-sm-8 col-lg-8" name="phone" placeholder="Enter your phone" required="true" />
								</div>
									<label class="col-md-12" >Text</label>
									<input type="text" class="col-md-8 col-sm-8 col-lg-8" name="text" placeholder="Send me a message" required="true" />
							</div>
							<div class="col-md-6">
								<div class="col-md-8">
								  <input class="btn btn-large" type="submit" class="checkoutButton" value="Submit"/>
								</div>
							</div>
						</form>
		          <?php
		            // loop through all the rows
		            foreach ($quilt_rows as  $row) {
		              $parts = explode(',', $row);
		              echo "<tr>";
		              // loop thru each part
		              foreach ($parts as $element) {
		                echo "<td>".$element."</td>";
		                }
		                echo "</tr>";
		            }
		            ?>

		            
		          </main>
		        </div><!-- col-12 -->
		      </div><!-- row -->
		</div><!-- container -->
	<!-- </div> --> <!-- container -->
	<footer>
		<div class="content container-fluid">
		</div>
	</footer>
	<!-- javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
<script type="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>
