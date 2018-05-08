<?php

include 'includes/header.php';



?>
	<div class="clearfix space"></div>

    <!-- Registration area starts -->
    <section id="registration" class="contact-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30 ">
                        <h2>Complete Your <span>Registration</span> </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt
						ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row contact-infos">
                <div class="col-md-8">
                    <!-- Registration form starts -->
                    <div class="contact-form mt-30">

                        <!-- Submition status -->
                        
                        <?php
                            if (isset($_GET['exists'])) {
                                echo "Sorry, you have registered before!";
                            }
                        ?>
                        <form id="ajax-contact" action="process.php" method="post">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group in_name">
                                        <input type="text" name="fname" class="form-control" id="name" placeholder="First Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group in_name">
                                        <input type="text" name="lname" class="form-control" id="name" placeholder="Last Name" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group in_email">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group in_email">
                                        <input type="text" name="address" class="form-control" id="email" placeholder="Address" required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="track" class="form-control" id="track" value = <?php if(isset($_GET['track'])){echo $_GET['track'];} else{ echo 'track';} ?> required="required" disabled>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="actions">
                                        <input type="submit" value="Register" name="submit" id="submitButton" class="btn" title="Register">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form ends-->

                </div>
                <div class="col-md-4">
                    <div class="address mt-30">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod invidunt ut labore etiops dolore magna aliquyam erat.</p>
                        

                        <div class="social-media ">
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'includes/footer.php';
