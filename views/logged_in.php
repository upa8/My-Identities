<?php 
  include('_header.php'); 
?>

<!-- 
-->
<!-- Collect the nav links, forms, and other content for toggling -->
          
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">My Identities <img class="img-responsive" src="img/logo.png" alt="Logo" width="80" height="80"> </a>
            </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     
                    <li >
                        <a href="index.php?logout">Logout</a>
                    </li>
                    
                    <li >
                        <a href="edit.php">Edit User</a>
                    </li>
                     <li class="page-scroll">
                        <a href="#about">About Us</a>
                    </li>
                     <!-- 
                     <li class="page-scroll">
                        <a href="#contact">Contact Us</a>
                    </li>
                    -->
                    
                    <!--
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    -->
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


<!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name"><?php echo $_SESSION['user_name'];?></span>
                        <hr class="star-light">
                        <span class="skills"> Save Your Identities </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Functions</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a href="aadhar_card.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/aadhar.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="licence.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/license.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="search.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/go++.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="about_us.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/aboutus.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="information.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/got.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="mediaLibrary.php" class="portfolio-link" >
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/wallet.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>About Us</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>            “Myidentities” is a website which provides you with a government certified digital copy of your Driving licence and Aadhaar card from your driving licence number and aadhaar card number. These digital copies can be used as original documents when needed as they are government certified.
    
</p>
                </div>
                <div class="col-lg-4">
    
                    <p>Complete plan of Myidentities has been proposed by Siddharth Gohel.
We will be launching our Android application soon.
</p>            </div>
                <!-- 
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>
                -->

            </div>
        </div>
    </section>

   




  <?php include('_footer.php'); ?>
