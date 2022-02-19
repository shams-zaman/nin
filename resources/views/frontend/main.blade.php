<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free NGO Resonsive Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}" type="image/x-icon">
   <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav.jpg')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/slider/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/plugins/slider/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>

<header class="continer-fluid ">
    <div style="padding: 0" class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            sales@smarteyeapps.com
                            <span>|</span></li>
                        <li>
                            <i class="fas fa-phone-volume"></i>
                            +876 987 666 5433</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 folouws">
                  
                    <ul class="ulright">
                       <li> <small>Folow Us </small>:</li>
                        <li>
                            <i class="fab fa-facebook-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-twitter-square"></i>
                        </li>
                        <li>
                            <i class="fab fa-instagram"></i>
                        </li>
                        <li >
                            <i class="fab fa-linkedin"></i>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 d-none d-md-block col-md-6 btn-bhed">
                    <a href="{{route('login')}}" class="btn btn-sm btn-success">Login</a>
                    <a href="{{route('register')}}" class="btn btn-sm btn-default">Register</a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-jk" style="margin:0; padding:0;" class="header-bottom">
        <div class="container">
            <div class="row nav-row">
                <div  style="padding: 0;" class="col-lg-3 col-md-12 logo">
                    <a  style="margin: 0; padding: 0;" href="index.html">
                        <img style="margin: 0; padding: 0;" src="{{asset('frontend/assets/images/zaman/ninLogo22.jpg')}}" alt="">
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                    </a>

                </div>
                <div id="menu" class="col-lg-9 col-md-12 d-none d-lg-block nav-col">

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('landing')}}">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}" >About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('mission')}}">Our Mission</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('policy')}}">Policy</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('our_team')}}">Our Team</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact_us')}}">Contact US</a>
                                </li>




                            </ul>


                </div>
            </div>
        </div>
    </div> 
 
    @if (Session::has('message'))
    <div>
        {{Session::get('post add')}}
    </div>
        
    @endif
        
    
</header>
  
                 
  <!-- ******************** Slider Starts Here ******************* -->
    <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{asset('frontend/assets/images/slider/slider-3.jpg')}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="animated bounceInDown slider-captions">
                                    <h1 class="slider-title">Most Stylish Free Travel Website</h1>
                                    <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{asset('frontend/assets/images/slider/slider-1.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{asset('frontend/assets/images/slider/slider-2.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions ">
                                <h1 class="slider-title">Most Attractive Travel Template</h1>
                                <p class="slider-text hidden-xs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>                 
                  
 <!--  ************************* About Us Starts Here ************************** -->    
{{-- <section mt-4 id="about_us"  class="container-fluid about-us>      --}}
<div id="about_us" class="about-us m-2 container-fluid">
    <div id="" class="container">

        <div  class="row natur-row no-margin w-100">
            <div class="text-part col-md-6">
                <h2>About Our Charity</h2>
               Hi,<br> <p>It's good to have you here, I believe you are curious to know what brings up this idea,
                Yes, an idea that comes into existence is born for a reason,</p>
                <br>
                <p>All Glory to God Almighty.</p>

                <p>I am Adaramaja Joshua the founder and CEO of NIS [New investment scheme} networking enterprise, Here with my family and colleagues who made this a reality, and mostly to my developer who is now my best partner on this I appreciate you all.</p>
                <p>I have always been purposely driven every day of my life focusing on how to make an impact in the world we live in, One thing I believe and would <a href="{{route('about')}}"> <b> ..more</b></a>

            </div>
            <div class="image-part col-md-6">
                <div class="about-quick-box row">
                    <div class="col-md-6">
                        <div class="about-qcard">
                           <i class="fas fa-user"></i>
                            <p>Becom a Volunteer</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-search-dollar red"></i>
                            <p>Quick Fundrais</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-donate yell"></i>
                            <p>Giv Donation</p>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="about-qcard ">
                           <i class="fas fa-hands-helping blu"></i>
                            <p>Help Someone</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
{{-- </section>    --}}
   
   
    
 <!-- ################# Mission Vision Start Here #######################--->
  
  <section class="container-fluid mission-vision">
    <div class="container">
        <div class="row mission">
            <div class="col-md-6 mv-det">
                <h1>Our Mission</h1>
                <p>We look forward to making the world a reality for students, youths, and adults, Anyone can join in this great opportunity. <br>
                    The world can only be better through you and I.
                    
                    This program is a great mission of impacting the lives of many students or graduates out there in a very positive way, observing the economic situation and scarcity of jobs out there, it is obvious that there are a lot of people facing a lot of challenges whereby most parents even find it difficult to pay their children fee and other things.
                    </p>
            </div>
            <div class="col-md-6 mv-img">
                <img src="{{asset('frontend/assets/images/misin.jpg')}}" alt="">
            </div>
        </div>
        <div class="row vision">
            <div class="col-md-6 mt-2 mv-img">
                 <img src="{{asset('frontend/assets/images/vision.jpg')}}" alt="">
            </div>
            <div style="margin-top: -.2rem" class="col-md-6 mv-det">
                 <h3 >Our Vision</h3>
                 <b>Our promise is that this journey would make you </b> <br> <br>
                <ul style="margin-left: 1rem"><li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> * Financially free </b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *Have time for family</b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *Have time for rest and</b></li>
                <li style="color: rgb(255, 0, 0); margin: .2rem; font-family: "Operator-Mono" "> <b> *The kind of freedom you want which would lead to achieving your purpose in life.
                </b>  <a href="{{route('mission')}}">..more</a></li></ul>
            </div>
        </div>
     
      
      
    </div>
  </section>   
   

    
     <!-- ################# Events Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Popular Causes</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>
            <div class="event-ro row">
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{asset('frontend/assets/images/events/image_08.jpg')}}" alt="">
                        <h4>Start From 1000# Only</h4>
              
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{asset('frontend/assets/images/events/image_06.jpg')}}" alt="">
                        <h4>Income from the first month!</h4>
                  
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="{{asset('frontend/assets/images/events/image_04.jpg')}}" alt="">
                        <h4>Attractive Bonus on cumulative</h4>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row session-title">
                    <h2>Our Bonuses in Numbers</h2>
                    <p>we provide Attractive Bonus in every month :</p>
                </div>
                 <div class="row">
                     <div class="col-sm-3 numb">
                         <h3>50%</h3>
                         <span>*Diamond</span>
                     </div>
                     <div class="col-sm-3 numb">
                         <h3>45%</h3>
                         <span>10* Director</span>
                     </div>
                     <div class="col-sm-3 numb">
                         <h3>45%</h3>
                         <span>5* Director</span>
                     </div>
                     <div class="col-sm-3 numb">
                         <h3>40%</h3>
                         <span>Director</span>
                     </div>
                 </div>
             </div>

        </div>

    </div> 
         
    <!--################### Our Team Starts Here #######################--->
          <section class="our-team team-11">
            <div class="container">
                <div class="session-title row">
                      <h2>Meet our Team</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla vel nisl a dictum. Donec ut est arcu. Donec hendrerit velit</p>
                </div>
                <div class="row team-row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="{{asset('frontend/assets/images/team/team-memb1.jpg')}}" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CEO </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="{{asset('frontend/assets/images/team/team-memb2.jpg')}}" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>CFO</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="{{asset('frontend/assets/images/team/team-memb3.jpg')}}" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Team Leader</i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="single-usr">
                            <img src="{{asset('frontend/assets/images/team/team-memb4.jpg')}}" alt="">
                            <div class="det-o">
                                <h4>David Kanuel</h4>
                                <i>Project Manager</i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>      
         
          
    
    <!-- ################# Our Blog Starts Here#######################--->

        {{-- <section class="our-blog">
         	<div class="container">
         		<div class="row session-title">
        			<h2> Our Blog </h2>
        			<p>Take a look at what people say about US </p>
        		</div>
        		<div class="blog-row row">
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{asset('frontend/assets/images/events/image_01.jpg')}}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{asset('frontend/assets/images/events/image_02.jpg')}}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        			<div class="col-md-4 col-sm-6">
        				<div class="single-blog">
        					<figure>
        						<img src="{{asset('frontend/assets/images/events/image_03.jpg')}}" alt="">
        					</figure>
        					<div class="blog-detail">
        						<small>By Admin | August 10 2018</small>
								<h4>Methods of Recuirtments</h4>
								<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam justo neque, aliquet sit amet elementum vel, vehicula eget eros. Vivamus arcu metus, mattis sed sagittis at, sagittis quis neque. Praesent.</p>
								<div class="link">
									<a href="">Read more </a><i class="fas fa-long-arrow-alt-right"></i>
								</div>
        					</div>
        					
        					
        				</div>
        			</div>
        		</div>
         	</div>
        </section> --}}
          
      <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Smart Eye is a leading provider of information technology, consulting, and business process services. Our dedicated employees offer strategic insights, technological expertise and industry experience.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <form action="{{route('message_us')}}" method="POST">
                        @csrf
                        <li style="padding: 0">
                            <input style="background-color: #1e2436; color:white" class="form-control pt-1" type="text" name="name">
                        </li>
                        <li  style="padding: 0">
                            <input style="background-color: #1e2436; color:white" class="form-control pt-1" type="email" required name="contact_email">
                        </li>
                        <li  style="padding: 0">
                            <textarea style="background-color: #1e2436; color:white" class="form-control pt-4" name="text"> </textarea>
                        </li>
                        <button  style="background-color: #1e2436; color:white"  type="submit" class="btn">Submit</button>
                        </form>
                       
                       
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        BlueDart <br>
                        Marthandam (K.K District) <br>
                        Tamil Nadu, IND <br>
                        Phone: +91 9159669599 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@bluedart.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.bluedart.in</a>
                    </address>

                </div>
            </div>
            
            
           
            
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2015 &copy; All Rights Reserved | Designed and Developed by Smarteyeapps</a>
                
             <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
             </span>
            </div>

     </div>
          
    


<script src="{{asset('frontend/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('frontend/assets/plugins/slider/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/script.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{!! Toastr::message() !!}
<script>


    @if($errors->any())
        @foreach($errors->all() as $error)
              toastr.error('{{ $error }}','Error',{
                  closeButton:true,
                  progressBar:true,
               });
        @endforeach
    @endif

</script>

</body>
</html>