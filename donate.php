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
        <div class="image-layer" style="background-image: url(images/background/bg-page-title-3.jpg);"></div>

        <div class="auto-container">
            <h1>Donations</h1>
        </div>

        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">Donation</li>
                </ul>
            </div>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Donate Section-->
    <section class="donate-section">
        <div class="auto-container">
            <div class="row clearfix">
                        
                <!--Form Column-->
                <div class="form-column col-lg-12 col-md-12">
                    <div class="default-form donate-form">
                        <form method="post" action="#">
                            <div class="sel-payment-type">
                                <h3>What type of donation are you making?</h3>
                                <div class="sel-type clearfix">
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-one" checked><label for="radio-one">One Time Payment</label></div>
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-two"><label for="radio-two">Weekly</label></div>
                                    <div class="select-box-one"><input type="radio" name="payment-group" id="radio-three"><label for="radio-three">Monthly</label></div>
                                </div>
                            </div>
                             <div class="sel-payment-amount">
                                <h3>Donation Amount</h3>
                                <div class="select-amount clearfix">
                                    <div class="select-box-two"><input type="radio" name="payment-amount" id="radio-four"><label for="radio-four">Rs:1000</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment-amount" id="radio-five"><label for="radio-five">Rs:1500</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment-amount" id="radio-six" checked><label for="radio-six">Rs:2500</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment-amount" id="radio-seven"><label for="radio-seven">Rs:5000</label></div>
                                    <div class="select-box-two"><input type="radio" name="payment-amount" id="radio-eight"><label for="radio-eight">Rs:10000</label></div>
                                </div>
                                <div class="other-input-box clearfix">
                                    <div class="field-label">Other Amount</div>
                                    <input type="text" name="other-payment" value="" placeholder="Enter Your Amount">
                                </div>
                            </div>
                            <h3>Personal Information</h3>
                            <div class="row clearfix">
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Your Name</div>
                                    <input type="text" name="field-name" value="" placeholder="" required>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Email</div>
                                    <input type="email" name="field-name" value="" placeholder="" required>
                                </div>
                                
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Phone</div>
                                    <input type="email" name="field-name" value="" placeholder="">
                                </div>
                                <div class="form-group col-md-12 col-sm-12">
                                    <div class="field-label">Address</div>
                                    <textarea name="field-name" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="payment-info">
                                <h3>Payment Amount</h3>
                                <div class="payment-options clearfix">
                                    <div class="payment-info-select"><input type="radio" name="payment-option-group" id="radio-nine" checked><label for="radio-nine">Credit Card <img src="images/icons/icon-credit-card.png" alt="" /></label></div>
                                    <div class="payment-info-select"><input type="radio" name="payment-option-group" id="radio-ten"><label for="radio-ten">Paypal <img src="images/icons/icon-paypal.png" alt="" /></label></div>
                                </div>
                                <div class="row clearfix">
                                    
                                    <div class="form-group col-md-12 col-sm-12">
                                        <div class="field-label">Card Number</div>
                                        <input type="text" name="field-name" value="" placeholder="" required>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">Expiry (MM/YY)</div>
                                        <input type="text" name="field-name" value="" placeholder="" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-12">
                                        <div class="field-label">CVC</div>
                                        <input type="text" name="field-name" value="" placeholder="" required>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="btn-box">
                               <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Info Column-->
            </div>
        </div>
    </section>

    <!-- Main Footer -->
    <?php include("php_include/footer.php")?>

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>

<script src="js/scrollbar.js"></script>
<script src="js/validate.js"></script>
<script src="js/custom-script.js"></script>

</body>
</html>