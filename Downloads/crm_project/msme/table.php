<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Flattern - Flat and trendy bootstrap site template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css1/bootstrap.css" rel="stylesheet" />
  <link href="css1/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css1/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css1/jcarousel.css" rel="stylesheet" />
  <link href="css1/flexslider.css" rel="stylesheet" />
  <link href="css1/styles.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

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
      <div class="container">
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
              <a href="index.html"><img src="img/logo.png" alt="" class="logo" /></a>
              <h1>Flat and trendy bootstrap template</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown">
                      <a href="index.html">Home <i class="icon-angle-down"></i></a>
                      
                    </li>
                    <!--<li class="dropdown active">
                     <!-- <a href="#">user results<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="table.html">policy 1</a></li>
                        <li><a href="table2.html">policy 2</a></li>
                        <li><a href="table3.html">policy 3</a></li>
                        <li><a href="table4.html">policy 4</a></li>
                        <li><a href="tanble5.html">Ipolicy 5</a></li>
                        <li><a href="table6.html">policy 6</a></li>
                        
                      </ul>-->
                    <!---</li>-->
                    <li class="dropdown">
                     <!-- <a href="#">policy<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.html">add policy</a></li>
                        
                      </ul>
                    </li>-->
                    <li class="dropdown">
                      <a href="#">Profile<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">update_profile</a></li>
                        <li><a href="logout.php">logout</a></li>
                        
                      </ul>
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
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Seller rating</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">seller results</a><i class="icon-angle-right"></i></li>
              <li class="active">Result 1</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <!-- Default table -->
       
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
		<?php
		$host="localhost";
$user="root";
$password="";
$database="msme";
$db = mysqli_connect($host, $user, $password, $database);
$q="SELECT   * FROM seller order by rating desc limit 4";
$result = mysqli_query($db,$q);
?>
        <div class="row">
          
            
          <div class="span6" style="width:1000px;">
            <h4>TRADE POLICY</h4>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>
                    NAME
                  </th>
                  <th>
                    Email
                  </th>
		 <th>
                    Rating
                  </th>
                </tr>
              </thead>
              <tbody>
               <?php 
foreach($result as $row) 
{
print ("<tr><td>");
print $row['name'];
print ("</td><td>");
print $row['email'];
print ("</td><td>");
print $row['rating'];
print ("</td></tr>");
}
?>
                 
              </tbody>
            </table>
          </div>
		  </div>
        
        <!-- divider -->
        
        <!-- end divider -->
       

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
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="https://www.facebook.com/minmsme" target="_blank" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
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
