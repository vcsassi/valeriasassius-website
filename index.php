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
					<div class="col-lg-4 col-sm-12 box">
						<a href="http://iaminspiredmsp.com/" target="_blank">
							<img  src="images/i-am-inspired-website.jpg" class="img-responsive">
						</a>
			            <h3 class="intro"># I Am Inspired</h3>
			            <p class="mrgn-lft">This single page website was created for the “I Am Inspired” event as part of Fashion Week Minnesota.<br>The website showcases the art and photography work of young artists.<br>The artwork chosen for the carrousel creates a colorful atmosphere.<br>A countdown watch for the event and geo location was included.</p>
			            <a target="_blank" href="http://iaminspiredmsp.com/"><p class="link">Go to site</p></a>
	        		</div>
	        		<div class="col-lg-4 col-sm-12 box box-small">
	            		<a href="../library/index.php" target="_blank">
		            		<img  src="images/library.jpg" class="img-responsive">
		          		</a>
			            <h3 class="intro">Library</h3>
			            <p class="mrgn-lft">This is a database to store, retrieve, edit, and delete items from a collection.<br>It works as a library that allows book club members to check out books from a private collection. The book club members will be able to add books to lend, perform a filtered search and read about the books.<br>The collection items can be easily updated and deleted.</p>
			            <a target="_blank" href="../library/index.php"><p class="link">Go to site</p></a>
			           <!--  <p class="proj-descr">iuhdrfi reshiuyh iu</p> -->
	        		</div>
	        		
	        		<div class="col-lg-4 col-sm-12 box box-big">
	        			<div class="bottom-align-text">
		        			<h3 class="intro">Library</h3>
				            <p class="mrgn-lft">This is a database to store, retrieve, edit, and delete items from a collection.<br>It works as a library that allows book club members to check out books from a private collection. The book club members will be able to add books to lend, perform a filtered search and read about the books.<br>The collection items can be easily updated and deleted.</p>
				            <a target="_blank" href="../library/index.php"><p class="link">Go to site</p></a>
							<a href="../library/index.php" target="_blank">
		            			<img  src="images/library.jpg" class="img-responsive">
		          			</a>
		          		</div>
	        		</div>
	        		<div class="col-lg-4 col-sm-12 box">
						<a href="life-beyond-our-planet/index.php" target="_blank">
	            			<img  src="images/planet.jpg" class="img-responsive">
	          			</a>
			            <h3 class="intro">Life Beyond our Planet</h3>
			            <p class="mrgn-lft">This is an online poll that displays instant results in a graphic chart.<br>Opinion Pools have many applications. They give a chance to educate and/or collect data. It gives people an opportunity to be heard.</p>
			            <a target="_blank" href="life-beyond-our-planet/index.php"><p class="link">Go to site</p></a>
	        		</div>
	        		
				</div><!-- row 2 -->
			</div><!-- Container -->
		</div><!-- page work -->

		<div class="page" id="about">
			<div class="container">
				<h2>About</h2>
				<div class="row col-md-12">
					<article>
						<p>Always craving the opportunity to design new processes.</br>Enjoy applying technical knowledge to projects in creative ways.</br>Avid explorer of new cultures and traveler with family and friends.</p>
					</article>
				</div>
					
				<!-- <div class="col-md-4 col-md-offset-1">
					<img  src="images/autorretrato.jpg" class="img-responsive autorretrato">
				</div> -->
			</div>
		</div><!-- page about -->

		<div class="page" id="contact">
			<div class="container">
				<h2>Contact</h2>
				<p>All fields required</p>
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
				<div class="row last">
				</div>
		</div> <!-- page -->
	<footer>
	    <div class="content container-fluid">
	      <div class="row">
	        <div class="col-sm-6">
	          <p class="property">All contents &copy; 2015 
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
	              <a href="VALERIA SASSI Resume.pdf" target="_blank" class="btn btn-file-pdf-o">
	                <i class="fa fa-file-pdf-o"></i>
	              </a>
	              <a href="VALERIA SASSI.doc" target="_blank" class="btn file-word-o">
	                <i class="fa fa-file-word-o"></i>
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
<script src="js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
</body>
</html>