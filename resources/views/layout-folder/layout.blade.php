
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Joberly</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
 <!-- <link href="img/favicon.png" rel="icon">-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">-->

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

 <!-- <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">-->
  <link href="{{asset('lib/magnific/dist/magnific-popup.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body>

  
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top" style="background-color: white;">
    <div class="container">
      
      <div class=" float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!--<h2 class="text-light"><a href="#header"><span class="inteli" >Intellicode </span></a></h2>-->

      <a href="{{url('/')}}" class="scrollto"><span class="text-style">JOBER<span style="color:black;">LY</span></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>

                 <!--<li> 
                  <form method="GET" action="/search">
                  <input type="search" placeholder="Search job titles"  class="form-control main-search" name="search">
                  </form>
                </li>-->
          <!--  <li><a href="{{url('/explore')}}">Search</a></li>-->
            <li><a href="{{url('/worldwide')}}">Worldwide Jobs</a></li>
          <!--href="#about"-->
            <li><a  href="{{url('/us-only')}}"><i class="fa-caret-square-up fa-caret-square-up"></i>US only jobs</a></li>
            <li><a  href="{{url('/eu-only')}}"><i class="fa-caret-square-up fa-caret-square-up"></i>EU only jobs</a></li>
         <!-- <li><a href="form.html"> Make payement</a></li> >  
          <li><a class="popup-with-form" href="#test-form"><i class="fa-caret-square-up fa-caret-square-up"></i>Post Jobs</a></li>
         <!-- <li><a class="popup-with-form" href="#test-form-login"><i class="fa-caret-square-up fa-caret-square-up"></i>Login</a></li>-->
        <li><a class=" btn-services"  href="{{url('/create-post')}}" style="text-decoration: none; color:white;">Post a Job</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
      
    </div>
  </header><!-- #header -->
 <!--<a class="popup-modal" href="#test-modal"></a>Open modal</a>-->

<div id="test-modal" class="mfp-hide white-popup-block">
	<h3>Notification !</h3>
	<p>This feature is not yet available</p>
	<p><a class="popup-modal-dismiss" style="color:red;" href="#"><i class="fa fa-remove"></i> Dismiss</a></p>
</div>
<!--------------------------------------------------------------------------------------------------->


<!--<form id="test-form-login" class="mfp-hide white-popup-block">
	<h3><i class="fa fa-diamond"></i> Login</h3>
  <hr>
	<fieldset style="border:0;">
		
		
	
				
			
			
			
				
				<p><input id="email" name="email" type="email" style="padding:3px; border-radius: 15px;" placeholder="example@domain.com" required=""></p>
			
			
				
		  	<p><input id="password" name="password" type="password" style="padding:3px; border-radius: 15px;"  placeholder="Password" required=""></p>
			
		
     
    
			
				<p><input type="submit" class="btn btn-primary"   value="Submit"></p>
			

	  <p><a class="popup-modal-dismiss" style="color:red;" href="#"><i class="fa fa-remove"></i> Dismiss</a></p>

	
	</fieldset>
</form>-->
 
  <!--==========================
    Intro Section
  ============================-->
  <!--<section  class="intro  bg-image" style="background-image: url(img/bg-8.jpg)">
  	<div class="overlay-itro"></div>
      <div class="intro-content display-table">
        <div class="table-cell">
        <div class="container" style="padding-top:100px;">
          
          <h1 class="intro-title wow bounceInRight"> Post Jobs for Just $250 <br><br> Hire remote talents around the world </h1>
         
          <a href="form.html" class="wow bounceInRight btn-services scrollto"><i class="fa fa-cash"> </i> Post Job</a>
        </div>
      </div>
    </div>

     <!-- <div class="intro-img">
        <img src="img/intro-img.svg" alt="" class="img-fluid">
      </div>-->
    
     <!--<div class="intro-info">
        <h2>We provide<br><span>solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    
  </section>-->
  <main id="main">



    

    <!--==========================
      About Us Section
    ============================-->
   <!-- #about -->


  

    
      @yield('container')

  

    <!--==========================
      Contact Section
    ============================-->
   <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
    
  <div class="icon-bar">
    <div> <a href="/explore"><i class="fa fa-search"></i></a></div>
    <div> <a href="/"><i class="fa fa-home"></i></a></div>
    <div><a href="/worldwide"><i class="fa fa-globe"></i></a></div>
    <!--<div><i class="fa fa-code"><a href=""></a></i></div>-->
  </div>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

         <!-- <div class="col-lg-4 col-md-6 footer-info">
            <h3>Intellicode</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>-->

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              joberly@gmail.com
             
            </p>
            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

         
         
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
       <!-- &copy; Copyright <strong style="color:#52bbaa"> <i class="fa fa-diamond"></i> Dynamo</strong>.-->   <b>Developed by Golden web solutions</b><br> <b>IndIgn Spec</b>
      </div>
      <div class="credits">
   
      
      </div>
    </div>
  </footer><!-- #footer -->

  
  <a href="#" class="telegram"><i class="fa fa-telegram"></i></a>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <script src="{{asset('lib/magnific/dist/jquery.magnific-popup.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
  $(function () {
    $('.popup-modal').magnificPopup({
      type: 'inline',
      preloader: false,
      focus: '#username',
      modal: true
    });
    $(document).on('click', '.popup-modal-dismiss', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
  });

  $(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if($(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
  $(document).on('click', '.popup-modal-dismiss', function (e) {
      e.preventDefault();
      $.magnificPopup.close();
    });
});

  </script>
</body>
</html>
