<!DOCTYPE html>
<html lang="en">
<head>
<?php include("php_include/head.php")?>
</head>

<body>

<div class="page-wrapper">
   <?php include("php_include/header.php")?>
   <!-- End Main Header -->


    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer" style="background-image: url(img/bn3.jpg);"></div>

        <div class="auto-container">
            <h1>Login</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Contact Section-->
    <section class="contact-section contact-page">
        <div class="icon-one paroller" data-paroller-factor="-0.20" data-paroller-factor-lg="-0.20" data-paroller-factor-sm="-0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-heart-2"></span></div>
        
        <div class="icon-two paroller" data-paroller-factor="0.20" data-paroller-factor-lg="0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-heart-2"></span></div>

        <div class="icon-three paroller" data-paroller-factor="-0.10" data-paroller-factor-lg="-0.15" data-paroller-factor-sm="0.10" data-paroller-type="foreground" data-paroller-direction="horizontal"><span class="flaticon-dove"></span></div>

        <div class="auto-container">
        
            <div class="sec-title centered">
                <div class="upper-icon"></div>
                <h2>Login Here</h2>
            </div>
            <div class="row clearfix">
                <!--Form Column--->
                <div class="form-column col-xl-10 col-lg-8 col-md-8 col-sm-8">
                    <div class="inner">
                        <div class="default-form contact-form">
                            <form method="post" action="http://t.commonsupport.xyz/kausid/sendemail.php" id="contact-form">
                                <div class="row clearfix">                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">User Id</div>
                                        <input type="text" name="username" placeholder="" required="">
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 form-group">
                                        <div class="field-label">Password</div>
                                        <input type="password" name="email" placeholder="" required="">
                                    </div>
                                    <center>
                                   <div class="col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Login</span></button>
                                    </div>
									</center>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Image Column--->
            </div>

        </div>
    </section>
	
	 <section class="bottom-info-box">
        <div class="auto-container">
            <div class="content">
                <div class="sec-title centered light">
                    <div class="upper-icon"></div>
                    <h2>Make a real difference to lives of many! By Joining PNHRC <span Style="Color:rgb(245, 169, 64);">&#10084;<span></h2>
                </div>
                <ul class="info clearfix">
                    <li><a href="tel:812-070-3692"><span class="fa fa-phone-alt"></span> Support us 812-070-3692</a></li>
                    <li><a href="mailto:donations@example.org"><span class="fa fa-envelope-open"></span> donations@example.org2</a></li>
                </ul>
                <div class="link-box"><a href="donate.php" class="theme-btn btn-style-one"><span class="btn-title">start fundrising</span></a></div>
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <?php include("php_include/footer.php")?>
</html>