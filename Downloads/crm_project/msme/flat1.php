<!DOCTYPE html>

<?php

session_start();
$_SESSION['username']=$_SESSION['username'];
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Ministry of micro,small& medium enterprises</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css1/bootstrap.css" rel="stylesheet" />
  <link href="css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css1/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css1/jcarouse.css" rel="stylesheet" />
  <link href="css1/flexslider.css" rel="stylesheet" />
  <link href="css1/styles.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="img1/favicon.ico" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
           
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
       
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
            </div>
            <!-- Signup Modal -->
            
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            
            <!-- end signin modal -->
            <!-- Reset Modal -->
            
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="" alt="" class="logo" /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.html">Home </a>
                     
                    </li>
                    <li class="dropdown">
                      <a href="#">seller results <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="table.php">seller1</a></li>
                        <li><a href="table1.html">seller2</a></li>
                        <li><a href="table2.html">seller3</a></li>
                        <li><a href="table3.html">seller3</a></li>
                        <li><a href="table4.html">seller4</a></li>
                        <li><a href="table5">seller5</a></li>
                      
                          
                            
                            <li><a href="table6.html">seller6</a></li>
                          
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                     <!-- <a href="#">policy <i class="icon-angle-down"></i></a>-->
                      <ul class="dropdown-menu">
                       <!-- <li><a href="about.html">add policys</a></li>-->
						
                        
                      </ul>
                    </li>
                     <li class="dropdown active">
                    	<li>
                                      <a><span class="page-scroll"> hi </span><span><?php if(!empty($_SESSION['sellername'])){echo $_SESSION['sellername'];}?></span></a>
				  </li>
                    </li>
                   
                   
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="img1/slides/nivo/big-1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="img1/slides/nivo/big-2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="img1/slides/nivo/big-3.jpg" alt="" title="#caption-3" />
		            <img src="img1/slides/nivo/big-4.jpg" alt="" title="#caption-3" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption -->
              
              <!-- Slide #2 caption -->
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end slider -->
    </section>

    <section id="content">
      <div class="container">
       
        <!-- divider -->
        
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12">
            <h4 class="heading">Products of <strong>Msme</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Air coolers" href="q1.php" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px"><strong>Air Cooler</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                  
					<img src="img1/works/thumbs/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  
				  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="sambandh" href="https://sambandh.msme.gov.in/PPP_Index.aspx" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px;"><strong>Ambulance Strecther</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="sampark" href="http://sampark.msme.gov.in/" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px; left:40% "><strong>Bags</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="ESDP" href="img/works/full/image-04-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:13px; text-align:left"><strong>Battery Charger</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="external site that opens in new tab" href="https://www.kviconline.gov.in/pmegpeportal/pmegphome/index.jsp" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px; left:30%"><strong>Domestic P.V.C Cables and wires</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="My Msme" href="https://my.msme.gov.in/MyMsme/Reg/welcome.htm" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px; left:45%"><strong>Lubricators</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Grievance Monitoring" href="https://igms.msme.gov.in/MyMsme/grievance/COM_Grievance_Welcome.aspx" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:15px; left:20%"><strong>Wooden Chairs</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                  <!-- Item Project and Filter Name -->
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="data Bank" href="http://www.msmedatabank.in/" target="_blank">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb " style="font-size:20px; left:30%"><strong>Umbrellas</strong></span>
						</a>
                    <!-- Thumb Image and Description -->
                    <img src="img1/works/thumbs/image-08.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <!-- End Item Project -->
                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
           <div class="span12">
            <h4>Very satisfied <strong>clients</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="http://dcmsme.gov.in/sido/trtdi.htm " title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/tool-rooms.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://pensionersportal.gov.in/PensionCalculators/Calculator.asp" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/pension.jpg" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://coirboard.gov.in/" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/kayar.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="https://www.india.gov.in/" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/india-gov.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://www.nimsme.org/" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/ni-msme.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://dcmsme.gov.in/" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/development-commissioner.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://www.kvic.org.in/kvicres/index.php" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/khadi.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="http://www.nsic.co.in/" title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/nsic.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="https://samanvay.cpse.in/homepage/login/"  title="external site opens in new tab" target="_blank">
					<img src="img1/dummies/clients/samanvay.png" class="client-logo" alt="" />
					</a>
              </li>
              
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits" style="font-color:blue;">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by MSME</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="http://www.facebook.com/minmsme" target="_blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="https://twitter.com/minmsme?original_referer=http%3A%2F%2Fmsme.gov.in%2FWeb%2FPortal%2FSocialMedia.aspx&profile_id=2595957175&tw" target="_blank" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js1/jquery.js"></script>
  <script src="js1/jquery.easing.1.3.js"></script>
  <script src="js1/bootstrap.js"></script>
  <script src="js1/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js1/jquery.fancybox.pack.js"></script>
  <script src="js1/jquery.fancybox-media.js"></script>
  <script src="js1/google-code-prettify/prettify.js"></script>
  <script src="js1/portfolio/jquery.quicksand.js"></script>
  <script src="js1/portfolio/setting.js"></script>
  <script src="js1/jquery.flexslider.js"></script>
  <script src="js1/jquery.nivo.slider.js"></script>
  <script src="js1/modernizr.custom.js"></script>
  <script src="js1/jquery.ba-cond.min.js"></script>
  <script src="js1/jquery.slitslider.js"></script>
  <script src="js1/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js1/custom.js"></script>

</body>
</html>
