<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phoneno = $_POST['phoneno'];
		$message = $_POST['message'];
		$from = 'Demo Contact Form';
		$to = 'info@centurypapersacks.com';
		$subject = 'Message from Contact Demo ';

		$body ="From: $name\n E-Mail: $email\n Phone No: $phoneno \n Message:\n $message ";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		// Check if name has been entered
		if (!$_POST['phoneno']) {
			$errPhone = 'Please enter your Phone No';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errPhone) {
	if (mail($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Century Paper Sacks</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Add your business website description here">
<meta name="keywords" content="Add your, business, website, keywords, here">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- favicon -->
<link rel="shortcut icon" href="favicon.html" type="image/x-icon">
<link rel="icon" href="favicon.html" type="image/x-icon">
<!-- google fonts -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
     <!-- Font icons -->
<link rel="stylesheet" href="css/vendor/elegant-font-icon.css">
<!-- stylesheet -->
<link rel="stylesheet" href="css/vendor/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">
<link rel="stylesheet" href="css/vendor/animate.css">
<link rel="stylesheet" href="css/vendor/owl.carousel.css">

<!-- Custom styles for this template -->
<link rel="stylesheet" type="text/css" href="css/colors/green-2.css" title="
green-2" media="screen"/>
<script type="text/javascript" src="js/vendor/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/vendor/modernizr.custom.js"></script>
</head>
<body>
<!-- preloader -->
<div id="pre-loader">
  <div class="pre-loader-container">
    <h2 class="section-title text-center preload-logo wow bounceIn"> <span class="section-title-border">Century Paper Sacks</span> </h2>
    <div class="loader wow"></div>
  </div>
</div>
<div id="wrapper" class="light-slider">
  <div class="header-barlist clearfix">
  <!-- logo -->
  <div class="logo-wrapper">
    <h1 class="logo"><img src="images/century-logo.png" alt="Stefen Title Services a responsive minimal multipurpose theme"/></h1>
  </div>
  <!-- /logo -->
  <!-- navigatin icon -->
  <div class="navmenu-open"> <a href="javascript:void(0);" id="trigger-navbar"> <span class="icon_menu"></span> </a> </div>
</div>
  <!-- / navigatin icon -->
  <!-- home - video presenation -->
  <section id="home" class="video presenation">
    <div class="overly-mask"></div>
    <div id="bg-slider" class="home-background"></div>
    <div class="home-text container">
      <div id="home-text-slider" class="home-carousel home-theme owl-carousel">
        <div class="item">
					<div class="row">
							<div class="col-md-10 col-md-offset-1 desktopslider">
						<div class="col-md-7">
							<div class="home-carousel-caption">
						    <h2 class="sliderFont">Pasted Valve Grade Lining Paper</h2>
						            <p class="text-light">Block Bottom Valve Bags combine minimum
						usage with highest mechanical & humidity
						resistance for nearly zero material<br>
						losses in the transport process</p>
						          </div></div>
						<div class="col-md-5">
								<img src="images/banner-1-1.png" alt="" class="img-responsive">
						</div>
					</div>
	</div>
        </div>
        <div class="item">
					<div class="row">
				<div class="col-md-10 col-md-offset-1">
						<div class="col-md-7">
							<div class="home-carousel-caption">
						            <h2>Pasted Valve Bags filler/packer for filling & weighing   </h2>
						            <p class="text-light">This valve bag packer / filler uses
either the impeller type filling process or an air type filling process</p>
						          </div></div>
						<div class="col-md-5">
												<img src="images/banner-2-1.png" alt="" class="img-responsive">
						</div>
					</div>
					</div>
        </div>
        <div class="item">
					<div class="row">
							<div class="col-md-10 col-md-offset-1">
						<div class="col-md-7">
							<div class="home-carousel-caption">
						            <h2>Pasted Valve Bags  </h2>
						            <p class="text-light">Pasted Valve Bags are closed bags
made of high quality materials</p>
						          </div></div>
						<div class="col-md-5">
												<img src="images/banner-3-1.png" alt="" class="img-responsive">
						</div>
					</div>
				</div>
        </div>
      </div>
    </div>
    <div class="scroll"> <span class="scroll-down"></span> <span class="scroll-text">Scroll</span> </div>
  </section>
  <!-- /home -->
  <!-- Main Wrapper -->
  <div id="main-wrapper">
    <!-- about -->
    <section id="about" class="section">
      <div class="container">
        <div class="row">
          <h2 class="section-title text-center"> <span class="section-title-border wow pulse" data-wow-duration="1s" data-wow-delay="1s">ABOUT US</span> </h2>
          <div class="section-info col-md-10 col-md-offset-1 text-center wow fadeInDown">
            <h3 class="brandColor">WELCOME TO CENTURY PAPER SACKS</h3>
            <ul class="hr">
              <li class="hr-line"><span></span></li>
              <li class="hr-icon"><i class="icon_heart_alt"></i></li>
              <li class="hr-line"><span></span></li>
            </ul>
            <p>CENTURY PAPAER SACKS is the leading manufacturer, exporter and supplier of Pasted Value bags suitable for all kind of packaging requirements. We have been building sound business relationships since past 7 years and have a network of clients all around the globe. We aim to provide our customers with complete packaging solutions in accordance to their requirements and specifications. We offer packaging solutions to our customers all around the world. </p>
						<p>We have been serving our clients in India and abroad since past seven years and our wealth of experience enable us to be a reputed international player from being domestic manufacturers and exporters. We provide customized solutions for our client’s packaging requirements and specifications.</p>
          </div>
        </div>
      </div>
      <!-- about-listing -->
    </section>
    <!-- /about -->
    <!-- services -->
    <section id="services" class="section">
      <div class="container">
        <div class="row">
          <h2 class="section-title text-center"> <span class="section-title-border wow pulse" data-wow-duration="1s" data-wow-delay="1s">PRODUCT</span> </h2>
          <div class="section-info col-md-10 col-md-offset-1 text-center wow fadeInDown">
            <h3 class="brandColor">Reliable, attractive & convenient packaging</h3>
            <ul class="hr">
              <li class="hr-line"><span></span></li>
              <li class="hr-icon"><i class="icon_adjust-vert"></i></li>
              <li class="hr-line"><span></span></li>
            </ul>
						<h3>Pasted Valve Bags are closed bags made of high
 quality materials, designed for high-speed filling through a
 valve on spout packers, flexible closure options</h3>

      <div id="products-slider" class="owl-carousel">
<div class="item">
<img src="images/products/cement-packs.jpg" alt="">
</div>
<div class="item">
		<img src="images/products/cement-packs-3.jpg" alt="">
</div>
<div class="item">
<img src="images/products/cement-packs-2.jpg" alt="">
</div>
<div class="item">
<img src="images/products/cement-packs.jpg" alt="">
</div>
<div class="item">
		<img src="images/products/cement-packs-3.jpg" alt="">
</div>
<div class="item">
<img src="images/products/cement-packs-2.jpg" alt="">
</div>
			</div>
                      <h3 class="brandColor">Pasted Valve Bags </h3>
											<p class="onlyCaps">Valve bags deliver top performance wherever high-speed filling processes are used. Filling performance and protection properties can be optimised according to the customer’s needs. Valve bags can be equipped with PE-free film or PE-Inliners where enhanced moisture protection is needed.</p>

          </div>
        </div>

</div>
    </section>
    <!-- /services -->
<section id="wheretoStart">
<div class="container-fluid">
<div id="wheretostart">
	<div class="container">
		<div class="row">
			<div class="section-info col-md-10 col-md-offset-1 text-center wow fadeInDown animated">
				<h3 class="brandColor">WHERE TO START?</h3>
				<p>We will share the Quotations & Details with you soon</p>
				<div class="text-center">
					<a data-scroll href="#contact" class="buttonCentury">YES! I AM INTERESTED</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>

<section id="clients" class="clientSection">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center wow fadeInDown animated">
<div id="clients-logo" class="owl-carousel">
	<div class="item">
		<img src="./images/clients/dalmia.jpg" alt="">
	</div>
	<div class="item">
		<img src="./images/clients/ramco.jpg" alt="">
	</div>
	<div class="item">
		<img src="./images/clients/sankar.jpg" alt="">
	</div>
	<div class="item">
		<img src="./images/clients/bharathi.jpg" alt="">
	</div>
	<div class="item">
		<img src="./images/clients/chettinad.jpg" alt="">
	</div>
</div>


				</div>
			</div>
	</div>
	</div>
</section>
            <!-- testimonial -->
        <section id="testimonial" class="">
          <div class="testimonial-wrapper"
            data-center="background-position: 0% 0px;"
            data-bottom-top="background-position: 0% 200px;"
            data-top-bottom="background-position: 50% -200px;"
            data-direction="vertical">
              <div class="text-center relative-bg">
                <div class="image-mask"></div>
                <div class="container basepadding">
                  <div class="testimonial-info row">
<h2 class="qualityhead">QUALITY ASSURANCE</h2>
<p class="qualityp">COMMITTED TO QUALITY</p>
<img src="images/quality-control.png" alt="">
                   </div>
                </div>
            </div>
          </div>
        </section>
        <!-- /testimonial -->


    <!-- address -->
    <section id="address">
      <div class="container-fuid">
        <div class="row text-center">
          <h2 class="lts-talk wow pulse" data-wow-duration="1s" data-wow-delay="1s">CONTACT US</h2>
					<p class="addressText">No.6 AVM Avenue, 5th Street Virugambakkam, Chennai
<br/>Tamil Nadu, India. Pincode -  600 092</p>
          <p class="addressText">Mobile : +91 . 98400 98400	<span class="mailstyle">MAIL : <a href="mailto:info@centurypapersacks.com" class="link">info@centurypapersacks.com</a></span></p>
        </div>
      </div>
    </section>
    <!-- /address -->
    <!-- contact -->
    <section id="contact" class="row section">
      <div id="container">
        <div class="row">
          <h2 class="section-title text-center"> <span class="section-title-border wow pulse" data-wow-duration="1s" data-wow-delay="1s">Get In Touch</span> </h2>
          <div class="section-info col-md-10 col-md-offset-1 text-center wow fadeInDown">
            <h3>We would love to hear from<strong> you.</strong></h3>
            <ul class="hr">
              <li class="hr-line"><span></span></li>
              <li class="hr-icon"><i class="icon_mail_alt"></i></li>
              <li class="hr-line"><span></span></li>
            </ul>
            <p>Drop us a line, whether it is a comment, a question, a work proposition. You can use either the form below or the contact details given above.</p>
          </div>
        </div>
        <div class="row">
          	<form class="form-horizontal" role="form" method="post" action="">
          <fieldset id="contactform" class="wow bounce" data-wow-duration="2s" data-wow-delay="0.5s">
            <div id="form_result"></div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <input name="name" type="text" id="name" class="form-control" placeholder="Full Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 col-md-offset-3">
                <input name="email" type="text" id="email" class="form-control" placeholder="Valid email ID" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="col-md-3">
                <input name="phoneno" type="text" id="phoneno" name="phoneno" class="form-control" value="" placeholder="Contact No">
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <textarea name="message" cols="40" rows="5" id="comments" class="form-control" placeholder="Your Message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
	               <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-default btn-lg" id="submit">SUBMIT</button>
              </div>
            </div>
          </fieldset>
        </form>
          <!-- </form> -->
        </div>
      </div>
    </section><br>
    <!-- /contact -->
    <!-- footer -->
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="move-up"><a data-scroll href="#home" class="arrow_carrot-2up"></a></div>
          <div class="footer-text">©  All Rights Reserved	WWW.CENTURYPAPERSACKS.COM</div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
  </div>
  <!-- /container-fluid -->
  <!-- menu items -->
  <section id="navbar" class="navbar navbar-hugeinc">
    <header> <a href="javascript:void(0);" class="navbar-close "> <span class="icon_close"></span></a>
      <div class="nav-logo">
        <h1 class="logo"><img src="images/century-logo.png" alt="logo"/></h1>
      </div>
    </header>
    <nav>
      <ul>
        <li> <a data-scroll href="#about"> <span class="primary">ABOUT</span> <span class="secondary">Get to know us</span>
          <div class="heading-sep"></div>
          </a> </li>
        <li> <a data-scroll href="#services"> <span class="primary">PRODUCT</span> <span class="secondary">Learn how we do</span>
          <div class="heading-sep"></div>
          </a> </li>
        <li> <a data-scroll href="#clients"> <span class="primary">CLIENT</span> <span class="secondary">know what you have to</span>
          <div class="heading-sep"></div>
          </a> </li>
        <li> <a data-scroll href="#contact"> <span class="primary">CONTACT</span> <span class="secondary">Get in to</span> </a> </li>
      </ul>
    </nav>
    <!-- footer -->
    <footer>
      <div class="nav-footer">
        <p class="nav-footer-copy">&copy; 2017 / Century Paper Sacks</p>
      </div>
    </footer>
    <!-- / footer -->
  </section>
  <!-- / menu items -->
</div>
<!-- /wrapper -->
<!-- Scripts -->
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="js/vendor/classie.js"></script>
<script type="text/javascript" src="js/vendor/respond.js"></script>
<script type="text/javascript" src="js/vendor/jquery.counterup.js"></script>
<script type="text/javascript" src="js/vendor/waypoints.min.js"></script>
<script type="text/javascript" src="js/vendor/smoothscroll.js"></script></script>
<script type="text/javascript" src="js/vendor/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="js/vendor/wow.js"></script>
<script type="text/javascript" src="js/vendor/detectmobilebrowser.js"></script>
<script type="text/javascript" src="js/vendor/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/vendor/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/vendor/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="js/vendor/easy-responsive-tabs.js"></script>
<script type="text/javascript">
       /* ==============================================
        Backstretch - v1.1
        =============================================== */
        $("#bg-slider").backstretch([
            "images/backgrounds/1.jpg",
            "images/backgrounds/2.jpg",
            "images/backgrounds/3.jpg",
        ], {
            fade: 1000,
            duration: 5000
        });

        $("#submit").submit( function() {
    $('body').scrollTo('#result',{duration:2000});
    return false;
    });
      </script>



</body>

</html>
