<?php 
include('includes/config.php');

session_start();
error_reporting(0);

include('includes/config.php');

if(strlen($_SESSION['alogin'])==0)
	{	
    header('location:../Login.php');
    }
    else{

?>

<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Vidyuth Jamwal </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
   </head>

   <body>

        <!--? Header Start-->
		<?php
		include ("includes/header.php");
		?>
        <!-- Header End-->
		
		
    <main>
 
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Biography</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
		
        <!--? About Area start -->
        <section class="about-area about2 section-padding30">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-caption2 mb-50">
                            <h3>Vidyut Jammwal</h3>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Vidyut Jammwal is an Indian actor, martial artist, and stunt performer, who predominantly works in Hindi films. Best known for his roles in action films like Commando series, he is a trained martial artist, having learnt the Indian martial art of Kalaripayattu since the age of three</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about2-img">
                            <img src="assets/img/gallery/about2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="about2-caption mb-70">
                            <h5>Physical Appearance</h5>
                            <p>Vidyut always carries an outrageous style with him. He has sculpted the athletic body with a tall height of 5’ 11”, 80 kg weight and 44″ chest, 32″ waist, and 18″ biceps. His eyes are brown and hair are black.He is a fitness freak and has six-pack abs. He follows a hard workout routine, as he does 5 days of martial art training, 2 days of weight training (6 – 7 hours/day), which includes warm-ups, running/ sprinting, pull-ups, squats, handstand walks, upper body workout that includes roman rings, parallel bars, and push-ups.</p>
                        </div>
                        <div class="about2-caption">
                            <h5>Familly, Caste & Girlfriend</h5>
                            <p>Vidyut was born in a Hindu Rajput family. His father passed away when he was a child and his mother, Vimla Jammwal is a former Miss Jammu & Kashmir. He has a sister.</p>
                        </div>
                    </div>
                </div>
				
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about2-img">
						    <h3 class="mb-20">Favourites</h3>
							<div class="about2-caption">
								<ul class="unordered-list">
									<li><p>Doing gymnastics, acrobatics, street stunts and tricking are his hobbies.</p></li>
									<li><p>He likes to eat Tofu Paneer, Gulab Jamun, Bhel Puri, and Pani Puri.</p></li>
									<li><p>His favourite celebrities are- M. G. Ramachandran, Rajinikanth, Kamal Haasan, Hrithik Roshan, Sunil Shetty, Salman Khan, Huma Qureshi, Nargis Fakhri, and Shruti Haasan.</p></li>
									<li><p>He likes to watch Bollywood movie ‘Singh is Kinng’, Hollywood movie ‘Robocop’, and Chinese movies ‘Police Story’ and ‘Enter The Dragon’.</p></li>
									<li><p>In his free time, he listens to the song ‘Lutt Jawan’ from the movie ‘Commando’.</p></li>
									<li><p>He likes to spend his holidays in Rishikesh.</p></li>
									<li><p>N. Lingusamy, AR Murugadoss, Prabhudeva, Shankar, SS Rajamouli, Dibakar Banerjee, Imtiaz Ali, Anurag Kashyap, Vipul Shah, and Tigmanshu Dhulia are his favourite film directors.</p></li>
								</ul>
							</div>
                        </div>
                    </div>
					<div class="col-lg-5 col-md-9">
                            <div class="about2-img">
                            <img src="assets/img/gallery/about3.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-6 col-md-9">
                        <div class="about2-img">
                            <img src="assets/img/gallery/about4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-9">
                        <div class="about2-caption mb-70">
                            <h5>Career</h5>
                            <p>
							He started his acting career, in 2011, with the Bollywood movie ‘Force’ (a remake of the Tamil film ‘Kaaka Kaaka’) for which he won the Filmfare Award in the categories of ‘Best Male Debut’ and ‘Most Promising Debut for 2012’.
							</p>
                        </div>
                        <div class="about2-caption">                 
                            <p>Till the age of 13, he attended Ashram in Palakkad, Kerala and the rest of his schooling is from the Army Public School, Dagshai, Himachal Pradesh.</p>
                        </div>
                    </div>
                </div>				



				
			
        <!--? Brand Shape  -->
            <div class="about-shape2 d-none d-xl-block">
                <img src="assets/img/gallery/about_shape2.png" alt="">
            </div>
        </section>
        <!-- About Area End -->




        <!--? Brand Area Start -->
        <section class="brand-area pb-bottom section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-30">
                            <h2>Take a look <br>at our achivment</h2>
                            <p>Excepteur sint occaecat cupidatat. irure dolor in.</p>
                          
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand1.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand02.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                    </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand2.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand3.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand4.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                   </div>
                   <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="assets/img/gallery/brand1.png" alt="">
                            <p>Behance award</p>
                            <p>Prize 2019</p>
                        </div>
                   </div>
                </div>
            </div>
            <!--? Brand Shape  -->
            <div class="brand-shape d-none d-lg-block">
                <img src="assets/img/gallery/brand_shape.png" alt="">
            </div>
        </section>
        <!-- Brand Area End -->

	
        <!--? Footer Start-->
		<?php
		include ("includes/footer.php");
		?>
        <!-- Footer End-->
 
    
	
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="assets/js/wow.min.js"></script>
		<script src="assets/js/animated.headline.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
		<script src="assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="assets/js/contact.js"></script>
        <script src="assets/js/jquery.form.js"></script>
        <script src="assets/js/jquery.validate.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        
    </body>
</html>
 <?php } ?>