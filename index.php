<?php
session_start();
require_once('controllers/criminals_controller.php');
if(!isset($_SESSION['user_id'])){
     header("location: view/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Justice Crime Verification</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/main.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Welcome to Justice Crime Verification</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +233-234-120-0160</span>
                         <span class="date-icon"><i class="fa fa-clock-o"></i> Always Open 24/7</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">justicecv@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand"></i>Crime Verification</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Head Officers</a></li>
                         <li><a href="#news" class="smoothScroll">News</a></li>
                         <li><a href="view/logout.php" title="logout">Logout</a></li>
                         <li class="appointment-btn"><a href="#appointment">Check Criminal Background</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                         <div class="owl-carousel owl-theme">
                              <div class="item item-first">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>To protect and to serve.</h3>
                                             <h1>Security</h1>
                                             <a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Officers</a>
                                        </div>
                                   </div>
                              </div>

                              <div class="item item-second">
                                   <div class="caption">
                                        <div class="col-md-offset-1 col-md-10">
                                             <h3>Crime Verification</h3>
                                             <h1>Background Checks</h1>
                                             <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
                                        </div>
                                   </div>
                              </div>
               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">
                    <div class="col-sm-6">
                         <img src="images/aboutus.jpeg" class="img-responsive" alt="">
                    </div>  
                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">        
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Justice Crime Verification</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Justice Crime Record Verification allows individuals to access their criminal or police records if they want to apply for jobs or visas that require criminal records.</p>
                                   <p>Also, employers and embassies can check if an individual has a higher level of a criminal record before making employment or visa decisions.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Our Officers</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="images/officer1.jpeg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Nate Baston</h3>
                                        <p>Inspector-General Of Police</p>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="images/officer2.jpeg" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Lily Stewart</h3>
                                        <p>Police Detective</p>
                                   </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="images/officer3.webp" class="img-responsive" alt="">

                                   <div class="team-info">
                                        <h3>Miasha Nakahara</h3>
                                        <p>Police Captain</p>
                                   </div>

                         </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- NEWS -->
     <section id="news" data-stellar-background-ratio="2.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <!-- SECTION TITLE -->
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Latest News</h2>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <a href="news-detail.html">
                                   <img src="images/news1.webp" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>November 23, 2021</span>
                                   <h3><a href="news-detail.html">Murderer Arrested as Police Investigates</a></h3>
                                   <p>A 44-year-old man has been arrested as police investigate a stabbing in the Butetown area of Cardiff</p>
                                   <div class="author">
                                        <img src="images/officer.jpeg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Keith Donda</h5>
                                             <p>Public Affairs Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <a href="news-detail.html">
                                   <img src="images/news2.webp" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>November 21, 2021</span>
                                   <h3><a href="news-detail.html">Police Officer identify victims in car ramping</a></h3>
                                   <p>Police have identified the suspect accused of driving through a christmas parade, killing five and injuring dozens</p>
                                   <div class="author">
                                        <img src="images/officer.jpeg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Keith Donda</h5>
                                             <p>Public Affairs Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <!-- NEWS THUMB -->
                         <div class="news-thumb wow fadeInUp" data-wow-delay="0.8s">
                              <a href="news-detail.html">
                                   <img src="images/news3.webp" class="img-responsive" alt="">
                              </a>
                              <div class="news-info">
                                   <span>November 24, 2021</span>
                                   <h3><a href="news-detail.html">Three teens arrested in shooting</a></h3>
                                   <p>Police have arrested three teenagers in connection with the shooting of three students on Friday</p>
                                   <div class="author">
                                        <img src="images/officer.jpeg" class="img-responsive" alt="">
                                        <div class="author-info">
                                             <h5>Keith Donda</h5>
                                             <p>Public Affairs Director</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>

     


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="images/pexels-photo-7714756.jpeg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form"  method="post" action="">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h3>Check Criminal Background</h3>
                              </div> 

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Last Name</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Last Name">
                                   </div>                                 

                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Other Name(s)</label>
                                        <input type="text" class="form-control" id="name" name="oname" placeholder="Other Name(s)">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">DOB</label>
                                        <input type="date" name="date" value="" class="form-control">
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Purpose</label>
                                        <select class="form-control">
                                             <option>General Purpose</option>
                                             <option>Visa Application</option>
                                             <option>Employment</option>
                                        </select>
                                   </div>
                                   <form method="post" action="confirmresult.php">
                                        <div class="col-md-12 col-sm-12">
                                        <label for="telephone">National Identification Number</label>
                                        <input type="number" class="form-control" id="phone" name="nationalid" placeholder="National ID">
                                        <a href=".msg"><button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button></a>
                                   </div>

                                   </form>
                                   <!-- <div class="col-md-12 col-sm-12">
                                        <label for="telephone">National Identification Number</label>
                                        <input type="number" class="form-control" id="phone" name="nationalid" placeholder="National ID">
                                        <a href=".msg"><button type="submit" class="form-control" id="cf-submit" name="submit">Submit</button></a>
                                   </div>
 -->
                                   <?php 
                                        if (isset($_POST['submit'])) {
                                             $nid = $_POST['nationalid'];

                                             $criminals = select_criminal($nid);

                                             if (!isset($criminals)) {
                                                  // echo "<small class='msg'>No Criminal Record(s) Found.</small>";
                                                  echo "<script>alert('No Criminal Record(s) Found.')</script>";
                                             }else{
                                                  // echo "<small class='msg'>Criminal Record(s) Found.          <a href='confirmresult.php?nationalid=$nid'>Click Here To View<a/></small>";
                                                   echo "<script>if(window.confirm('Criminal Record(s) Found')){
                                                       window.location.href='view/confirmresult.php?nationalid=$nid'
                                                   }</script>";
                                                   
                                             }
                                             exit();
                                        }
                                    ?>

                              </div>
                        </form>
                    </div>

               </div>
          </div>
     </section>

     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">About Us</h4>
                              <p>Police website used to check criminal results without the stress of going to the police station</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> +233-234-120-0160</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">justicecv@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news1.webp" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Murderer Arrested</h5></a>
                                        <span>November 23, 2021</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="#"><img src="images/news2.webp" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="#"><h5>Vehicle ramping</h5></a>
                                        <span>November 21, 2021</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
                                   <p>Always Open<span>24/7</span></p>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>