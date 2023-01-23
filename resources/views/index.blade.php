
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
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">-->

  <!-- Bootstrap CSS File -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
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
          <li>
             <!--<form method="GET" action="/search">
           <input type="search" placeholder="Search job titles"  class="form-control main-search" name="search">
            <button type="submit">Submit</button>
           </form>-->
          </li>
          <li class="active"><a href="{{url('/explore')}}"><i class="fa fa-search"></i> Search</a></li>
          <li class="active"><a href="{{url('/worldwide')}}">Worldwide Jobs</a></li>
          <!--href="#about"-->
          <li><a  href="{{url('/us-only')}}"><i class="fa-caret-square-up fa-caret-square-up"></i>US only jobs</a></li>
          <li><a  href="{{url('/eu-only')}}"><i class="fa-caret-square-up fa-caret-square-up"></i>EU only jobs</a></li>
         <!-- <li><a href="form.html"> Make payement</a></li> >  
          <li><a class="popup-with-form" href="#test-form"><i class="fa-caret-square-up fa-caret-square-up"></i>Post Jobs</a></li>
         <!-- <li><a class="popup-with-form" href="#test-form-login"><i class="fa-caret-square-up fa-caret-square-up"></i>Login</a></li>-->
        <li><a class=" btn-services"  href="{{url('/create-post')}}" style="text-decoration: none; color:white;">Post a Job</a></li>
        </ul>
      </nav><!-- .main-nav -->

     <!-- <form method="GET" action="/search">
        <input type="search" placeholder="Search job titles"  class="form-control main-search" name="search">
         <button type="submit" class="main-submit"><i class="fa fa-search"></i></button>
      </form>-->
      
    </div>
  </header><!-- #header -->
 <!--<a class="popup-modal" href="#test-modal"></a>Open modal</a>-->

<div id="test-modal" class="mfp-hide white-popup-block">
	<h3>Notification !</h3>
	<p>This feature is not yet available</p>
	<p><a class="popup-modal-dismiss" style="color:red;" href="#"><i class="fa fa-remove"></i> Dismiss</a></p>
</div>
<!--------------------------------------------------------------------------------------------------->

<!--<form id="test-form-tax" class="mfp-hide white-popup-block"  action="{{ route('store.job')}}" method="POST" enctype="multipart/form-data"> 
	<h3>Post Job</h3>
  <hr>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="form-group">
        
          <input id="job_title" name="job_title" type="text" class="form-control" placeholder="Job title" required>
  
         </div>
       <div class="form-group">
        
        <input id="company_name" name="company_name" type="text" class="form-control" placeholder="Company's name" required="required">

       </div>

       <div class="form-group">
        
        <input id="email" name="email" type="email" class="form-control"  placeholder="Email example@gmail.com" required="required">

       </div>
       

       <div class="form-group">
        
        <textarea class="form-control" id="description" name="description" rows="8" class="form control">Description</textarea>

       </div>


       <div class="form-group">
        
        <select name="category" class="form-control">
          <option>Job Category</option>
          <option value="backend end Engineer">Back end Engineering</option>
          <option value="frontend Engineer">Front end Engineering</option>
          <option value="product">Product</option>
          <option value="management and finance">Management and Finance</option>
          <option value="devops and sysadmins">Devops and Sysadmins</option>
        
       </select>

       </div>


       <div class="form-group">
        
        <select name="location" class="form-control">
          <option>Choose preffered location</option>
          <option value="US only">US only</option>
          <option value="EU only">EU only</option>
          <option value="worldwide">Anywhere</option>
       </select>

       </div>
           

       
       <div class="form-group">
        
        <input type="file" name="logo" class="form-control">
    
       </select>

       </div>

       <div class="form-group">
        
        <select name="job_type" class="form-control">
          <option>Select job type</option>
          <option value="full time">Full time</option>
          <option value="Contract">Contract</option>
          <option value="Temporary">Temporary</option>
    
       </select>

       </div>

       

       <div class="form-group">
        
        <input name="comp_hq" type="text" class="form-control"  placeholder="Company HQ" required="required">

       </div>
       
       <div class="form-group">
        <input name="link" type="text" class="form-control"  placeholder="Application link" required="required">

       </div>
       
       <div class="form-group">
        <input type="submit" value="POST" class="btn btn-success">

       </div>

       <div class="form-group">
         @csrf
    
       </div>

      </div>

    </div>
  </div>-->
<!--	<fieldset style="border:0;">
		
		
	
				
				<p><input id="name" name="company_name" type="text" class="form-control" placeholder="Type in Your TIN" required="required"></p>
			
			
				
			<p><input id="email" name="email" type="email" style="padding:3px; border-radius: 15px;" placeholder="example@domain.com" required=""></p>
			
			
				
		  	<p><input name="email" type="email" class="form-control"  placeholder="example@gmail.com" required="required"></p>
			
		
     
    
			
				<p><a href="" class="btn btn-primary">Submit</a></p>
			

	  <p><a class="popup-modal-dismiss" style="color:red;" href="#"><i class="fa fa-remove"></i> Dismiss</a></p>

	
	</fieldset>-->
</form>
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



<!-- style="background-image: url(img/bg-10.jpg) background-color:rgb(197, 234, 222); width:100%;"v  -->

<!--<section  class="intro bg-image"  style=" background-image: url(img/bg-10.jpg);">




 <!-- <p class="text-center  main-title"  style="padding-top:150px;">Hire remote talent from around the world </p>
  


  <div class="text-center mt-4">
  <a class="btn-button" style="text-decoration:none;"  href="{{url('/create-post')}}">Post a Job</a>
  </div>
 <div class="overlay-itro"></div>
  <div class="intro-content display-table">
  
  
    <div class="table-cell" style="padding-top:100px;">
    <div class="container" >
      
      <h1 class="intro-title"> Post Jobs for Just $250  </h1>

     
    
      <h1 class="intro-title wow bounceInRight"> Hire remote talent from around the world</h1>
      
    
    </div> 
  </div>
</div>

</section>-->
<!--<section class="intro" style="background:#9deeda; width:100%; padding-top:100px; height:300px;">
        
         <p class="text-center" style="font-weight:800; font-size:25px;">POST JOBS FOR JUST $250<p>
        
        
          <p class="text-center" style="font-weight:800; font-size:25px;">HIRE TALENTS FROM AROUND THE WORLD<p>
          

          <div class="btn btn-light btn-outline text-center">Post a Job</div>
  </section>-->
 
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




    <section id="about" style="padding-top:100px;">
      <div class="container">

        <header class="section-header">
           @include('inc.messages')
          <h3> All remote jobs</h3>
         <!--- <h3>About Us</h3>
          <p>intellicode limited is a tech solution and service firm thats specialises in providing cutting edge innovative technology to meet the needs of our clients </p>-->
        </header>

        <div class="row justify-content-center about-container">

          @if(count($ten) > 0)


          @foreach($ten as $tens)
         
          <div class="col-lg-8 mt-4">
           
            <div class="tile">
             
              

  
               

              @if(now() > $tens->created_at->diffForHumans())
            <span class="new-card">New</span>

              @else  
                 
            <span style="color:white; background-color:rgb(122, 144, 122); padding:10px; border-radius:15px; position:relative; float:right;">{{ $tens->created_at->diffForHumans()}}</span>
 
             @endif


              <p><img src="storage/banner_img/{{$tens->logo}}" class="profile-img"/></p>

              <p class="comp-name"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$tens->id}}">{{$tens->company_name}}</a></p>

              <p class="job-title"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$tens->id}}">{{$tens->job_title}}</a></p>
            
               
              <p>{{$tens->location}} </p>
          

          
            </div>
          
          
          
          </div>
          

          @endforeach
          @else
         <h1> No data yet</h1>

          @endif
       

      
      </div>

      </div>
    </section><!-- #about -->


    <!--==========================
      About Us Section
    ============================-->
    <section id="about" style="padding-top:50px;">
      <div class="container">

        <header class="section-header">
          <h3>  Front end Engineer jobs</h3>
         <!--- <h3>About Us</h3>
          <p>intellicode limited is a tech solution and service firm thats specialises in providing cutting edge innovative technology to meet the needs of our clients </p>-->
        </header>

        <div class="row justify-content-center about-container">

          @if(count($front) > 0)


          @foreach($front as $fronts)

          <div class="col-lg-8  mt-4">
             
            <div class="tile">
             
             
             
  
              
              @if(now() > $fronts->created_at->diffForHumans())
              <span class="new-card">New</span>
              @else  
                 
              <span style="color:white; background-color:rgb(122, 144, 122); padding:10px; border-radius:15px; position:relative; float:right;">{{ $fronts->created_at->diffForHumans()}}</span>
   
               @endif


              <p><img src="storage/banner_img/{{$fronts->logo}}" class="profile-img" /></p>

              <p class="comp-name"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$fronts->id}}">{{$fronts->company_name}}</a></p>

              <p class="job-title"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$fronts->id}}">{{$fronts->job_title}}</a></p>
            
               
              <p>{{$fronts->location}} </p>

            </div>
           
          </div>
             @endforeach
             @else
             <div class="col-md-8">
              <h1> No data yet</h1>

             </div>

             @endif

          
            

         
       

      <div class="col-md-8" style="padding-top:10px;">
        <p class="text-center"><a href="/frontend"> see more >></a></p>
      </div>
      </div>

      </div>
    </section><!-- #about -->


    <section id="about" style="padding-top:50px;">
      <div class="container">

        <header class="section-header">
          <h3>Back end Engineer jobs</h3>
         <!--- <h3>About Us</h3>
          <p>intellicode limited is a tech solution and service firm thats specialises in providing cutting edge innovative technology to meet the needs of our clients </p>-->
        </header>

        <div class="row justify-content-center about-container">

          @if(count($back) > 0)


          @foreach($back as $backs)

          <div class="col-lg-8 mt-4 ">
            
            <div class="tile">
             
             
  
              
              @if(now() > $backs->created_at->diffForHumans())
              <span class="new-card">New</span>
              @else  
                 
                   <span style="color:white; background-color:rgb(122, 144, 122); padding:10px; border-radius:15px; position:relative; float:right;">{{ $backs->created_at->diffForHumans()}}</span>
        
                @endif


              <p><img src="storage/banner_img/{{$backs->logo}}" class="profile-img" /></p>

              <p class="comp-name"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$backs->id}}">{{$backs->company_name}}</a></p>

              <p class="job-title"><a style="text-decoration:none; color black;" href="{{url('/show')}}/{{$backs->id}}">{{$backs->job_title}}</a></p>
            
               
              <p>{{$backs->location}}</p>
            </div>

          </div>
             @endforeach
             @else
             <div class="col-md-8">
              <h1 class="text-center"> No data yet</h1>

             </div>

             @endif

          
          
             <div class="col-md-8" style="padding-top:10px;">
              <p class="text-center"><a href="/back-end"> see more >></a></p>
            </div>

      </div>
       
          
      </div>
    </section>



    <section id="about" style="padding-top:50px;">
      <div class="container">

        <header class="section-header">
          <h3>Management and Finance Jobs</h3>
         <!--- <h3>About Us</h3>
          <p>intellicode limited is a tech solution and service firm thats specialises in providing cutting edge innovative technology to meet the needs of our clients </p>-->
        </header>

        <div class="row justify-content-center about-container">

          @if(count($manage) > 0)


          @foreach($manage as $manages)

          <div class="col-lg-8  mt-4 ">

           
            <div class="tile">
             
             
             
  
              
              @if(now() > $manages->created_at->diffForHumans())
              <span class="new-card">New</span>
            
              @else  
                 
              <span style="color:white; background-color:rgb(122, 144, 122); padding:10px; border-radius:15px; position:relative; float:right;">{{ $manages->created_at->diffForHumans()}}</span>
   
               @endif

              <p><img src="storage/banner_img/{{$manages->logo}}" class="profile-img" /></p>
                  
              <p class="comp-name"><a href="{{url('/show')}}/{{$manages->id}}">{{$manages->company_name}}</a></p>

             <p class="job-title"><a href="{{url('/show')}}/{{$manages->id}}">{{$manages->job_title}}</a></p>

             
               
              <p>{{$manages->location}}</p>
             </div>
 
             </div>
       
             @endforeach
             @else
             <div class="col-md-8">
              <h1> No data yet</h1>

             </div>
           

             @endif

          
          

             <div class="col-md-8" style="padding-top:10px;">
              <p class="text-center"><a href="/management"> see more >></a></p>
            </div>
      </div>

      </div>
    </section>

  
    <!--==========================
      Contact Section
    ============================-->
   <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
 
  
  <div class="icon-bar">
    <!--<span> <i class="fa fa-search"></i></span>
    <span> <i class="fa fa-home"></i></span>
    <span><i class="fa fa-globe"></i></span>
    <span><i class="fa fa-code"></i></span>-->
    Post a Job for $250 and Hire talents from around the world <a class="btn btn-light" href="{{url('/create-post')}}"> Post a Job</a>
  </div>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row wow bounceInRight">

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
              <!--<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>-->
             
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="img/download.jpg" width="100" height="100">
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
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('lib/magnific/dist/jquery.magnific-popup.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
 
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
