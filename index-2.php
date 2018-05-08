<?php
    //init.php holds initialization files and db connection
    require_once "core/init.php"; 

    //header.php holds the html header information and nav bar
    include "includes/header.php";
?>

    <div class="clearfix space"></div>

    <!-- Slider area starts -->
    <section id="slider">
        <div id="carousel-example-generic" class="carousel slide carousel-fade">
            <div class="carousel-inner" role="listbox">

                <!-- Item 1 -->
                <div class="item active slide1">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text container">
                                <div class="title clearfix">
                                    <h2>TODAY’S <span>PROGRESS</span> WAS YESTERDAY’S  <span>PLAN </span></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit sed do eiusmod incididunt ametfh.</p>
                                </div>
                                <a href="#" class="btn btn-trnsp btn-big fixed-btn ">PURCHASE NOW</a>
                                <a href="#" class="btn btn-trnsp btn-big">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="item slide2">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text container">
                                <div class="title clearfix ">
                                  <h2>TODAY’S <span>PROGRESS</span> WAS YESTERDAY’S  <span >PLAN </span></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit sed do eiusmod incididunt ametfh.</p>
                                </div>
                                <a href="#" class="btn btn-trnsp btn-big fixed-btn ">PURCHASE NOW</a>
                                <a href="#" class="btn btn-trnsp btn-big">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="item slide3">
                    <div class="table">
                        <div class="table-cell">
                            <div class="intro-text container">
                                <div class="title clearfix">
                                  <h2>TODAY’S <span>PROGRESS</span> WAS YESTERDAY’S  <span >PLAN </span></h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit sed do eiusmod incididunt ametfh.</p>
                                </div>
                                <a href="#" class="btn btn-trnsp btn-big fixed-btn ">PURCHASE NOW</a>
                                <a href="#" class="btn btn-trnsp btn-big">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Wrapper for slides-->

            <!-- Carousel Pagination -->
            <div class="carsol-control">
                <a class="left welcome-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right welcome-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>

        </div>
    </section>
    <!-- Slider area ends -->

    <!-- About area start -->
    <section id="about" class="about-area section-big">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30 ">
                        <h2>About <span>US</span> </h2>
                        <p> <span>Lorem</span> ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!--About Image-->
                <div class="col-md-5 col-sm-12">
                    <div class="about-image mt-30">
                        <img src="assets/img/about/about-img.jpg" alt="">
                    </div>
                </div>

                <div class="col-md-7 col-sm-12">

                    <!--About Content-->
                    <div class="about-content mt-30">
                        <h3 class="sub-title">Why We Are Best Choice</h3>
                        <div class="about-details">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <div class="space-text-top">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <!--About single-content-->
                        <div class="bdr single-content mt-30">
                            <div class="icon">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="content-box">
                                <h4>ECOMMERCE</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and types.</p>
                            </div>
                        </div>

                        <!--About single-content-->
                        <div class="bdr single-content mt-30">
                            <div class="icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="content-box">
                                <h4>Marketing</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and types.</p>
                            </div>
                        </div>

                        <!--About single-content-->
                        <div class="bdr single-content mt-30">
                            <div class="icon">
                                <i class="fa fa-television  "></i>
                            </div>
                            <div class="content-box">
                                <h4>UX Design</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and types.</p>
                            </div>
                        </div>

                        <!--About single-content-->
                        <div class="bdr single-content mt-30">
                            <div class="icon">
                                <i class="fa fa-lightbulb-o  "></i>
                            </div>
                            <div class="content-box">
                                <h4>Branding</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and types.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About area ends -->

    <!-- Skill area start -->
    <section class="skill-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="sub-section skill-title mb-60">
                        <h3 class="sub-title">What Skills We Have</h3>
                    </div>

                    <!-- single Skill panel -->
                    <div class="panel-according panel-group according-icon plus-icon" id="accordion-one">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
									<a data-toggle="collapse" data-parent="#accordion-one" href="#collapse-one">
									What makes you special from others?
									</a>
								</h3>
                            </div>
                            <div id="collapse-one" class="panel-collapse collapse in">
                                <div class="panel-body">
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus interdum urna. Phasellus ac lorem ut tellus ornare condimentum. Nulla facilisi. Nulla at facilisis nibh, in ultricies arcu.
                                </div>
                            </div>
                        </div>

                        <!-- single Skill panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
								<h3 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse2">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
									</a>
								</h3>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus interdum urna. Phasellus ac lorem ut tellus ornare condimentum.
                                </div>
                            </div>
                        </div>

                        <!-- single Skill panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-three">
									Phasellus ac lorem ut tellus ornare condimentum?
									</a>
								</h3>
                            </div>
                            <div id="collapse-three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus interdum urna. Phasellus ac lorem ut tellus ornare condimentum.
                                </div>
                            </div>
                        </div>

                        <!-- single Skill panel -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">
									<a class="collapsed" data-toggle="collapse" data-parent="#accordion-one" href="#collapse-four">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit ?
									</a>
								  </h3>
                            </div>
                            <div id="collapse-four" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean finibus interdum urna. Phasellus ac lorem ut tellus ornare condimentum. Nulla facilisi. Nulla at facilisis nibh, in ultricies arcu.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end panel according -->
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                    <div class="sub-section skill-title mb-60 sm-mt-30">
                        <h3 class="sub-title">our skill</h3>
                    </div>
                    <div class="skill-bar">
                        <h4>Web Design</h4>
                        <div class="skillbar clearfix " data-percent="85%">
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent one">85%</div>
                        </div>
                    </div>
                    <!-- Work Skill -->
                    <div class="skill-bar">
                        <h4>Web Development</h4>
                        <div class="skillbar clearfix " data-percent="80%">
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent two">80%</div>
                        </div>
                    </div>
                    <!-- Work Skill -->
                    <div class="skill-bar">
                        <h4>Wordpress</h4>
                        <div class="skillbar clearfix " data-percent="90%">
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent three">90%</div>
                        </div>
                    </div>
                    <div class="skill-bar">
                        <h4>Photoshop</h4>
                        <div class="skillbar clearfix " data-percent="85%">
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent one">85%</div>
                        </div>
                    </div>
                    <div class="skill-bar ">
                        <h4>Branding</h4>
                        <div class="skillbar mb-0 clearfix " data-percent="85%">
                            <div class="skillbar-bar"></div>
                            <div class="skill-bar-percent one">85%</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end of about area  -->

    <!--Service area start -->
    <section id="service" class="service-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30 ">
                        <h2>service <span>provice</span> </h2>
                        <p> <span>Lorem</span> ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt
						ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <ul class="service-list">
                        <li class="active">
                            <a href="#web" data-toggle="tab"> <i class="fa fa-television"></i>
                                <br> Web design </a>
                        </li>
                        <li>
                            <a href="#graphics" data-toggle="tab"> <i class="fa fa-codepen"></i>
                                <br> graphics design</a>
                        </li>
                        <li>
                            <a href="#web-development" data-toggle="tab"><i class="fa fa-code"></i><br> web development</a>
                        </li>
                        <li>
                            <a href="#seo" data-toggle="tab"><i class="fa fa-globe"></i><br>seo optimize</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active " id="web">
                            <div class="tab-content">
                                <div class="tab-img">
                                    <img src="assets/img/service/tab1.jpg" alt="">
                                </div>
                                <div class="single-tab">
                                    <h3 class="sub-title">WE ARE CREATIVE WEB <span>DESIGNER</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="mt-30 mb-30">
                                        <p>In congue justo sit amet odio semper, non suscipit elit fringilla. Aenean vitae metus efficitur, mattis dolor ac, condimentum lacus Cras semper ultrices libero vel interdum.</p>
                                    </div>
                                    <ul>
                                        <li> Anim pariatur cliche reprehenderit </li>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li> Morbi accumsan ipsum velit sodales tellus odio tincidunt auctor</li>
                                        <li>Locavore pork belly scenester, pinterest chillwave microdos</li>
                                    </ul>
                                    <a href="#" class="btn tab-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="graphics">
                            <div class="tab-content">
                                <div class="tab-img">
                                    <img src="assets/img/service/tab2.jpg" alt="">
                                </div>
                                <div class="single-tab">
                                    <h3 class="sub-title">WE ARE CREATIVE graphics <span>DESIGNER</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="mt-30 mb-30">
                                        <p>In congue justo sit amet odio semper, non suscipit elit fringilla. Aenean vitae metus efficitur, mattis dolor ac, condimentum lacus Cras semper ultrices libero vel interdum.</p>
                                    </div>
                                    <ul>
                                        <li> Anim pariatur cliche reprehenderit </li>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li> Morbi accumsan ipsum velit sodales tellus odio tincidunt auctor</li>
                                        <li>Locavore pork belly scenester, pinterest chillwave microdos</li>
                                    </ul>
                                    <a href="#" class="btn tab-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="web-development">
                            <div class="tab-content">
                                <div class="tab-img">
                                    <img src="assets/img/service/tab3.jpg" alt="">
                                </div>
                                <div class="single-tab">
                                    <h3 class="sub-title">WE ARE CREATIVE web <span>development</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="mt-30 mb-30">
                                        <p>In congue justo sit amet odio semper, non suscipit elit fringilla. Aenean vitae metus efficitur, mattis dolor ac, condimentum lacus Cras semper ultrices libero vel interdum.</p>
                                    </div>
                                    <ul>
                                        <li> Anim pariatur cliche reprehenderit </li>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li> Morbi accumsan ipsum velit sodales tellus odio tincidunt auctor</li>
                                        <li>Locavore pork belly scenester, pinterest chillwave microdos</li>
                                    </ul>
                                    <a href="#" class="btn tab-btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="seo">
                            <div class="tab-content">
                                <div class="tab-img">
                                    <img src="assets/img/service/tab4.jpg" alt="">
                                </div>
                                <div class="single-tab">
                                    <h3 class="sub-title">WE ARE CREATIVE seo <span >expert</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <div class="mt-30 mb-30">
                                        <p>In congue justo sit amet odio semper, non suscipit elit fringilla. Aenean vitae metus efficitur, mattis dolor ac, condimentum lacus Cras semper ultrices libero vel interdum.</p>
                                    </div>
                                    <ul>
                                        <li> Anim pariatur cliche reprehenderit </li>
                                        <li> Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                                        <li> Morbi accumsan ipsum velit sodales tellus odio tincidunt auctor</li>
                                        <li>Locavore pork belly scenester, pinterest chillwave microdos</li>
                                    </ul>
                                    <a href="#" class="btn tab-btn">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- fun-facts area starts -->

    <!-- fun-facts area starts -->
    <section id="fun-facts" class="fun-facts-area section-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center ">
                        <i class="fa fa-thumbs-o-up"></i>
                        <h3><span class="timer">5687</span></h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center ">
                        <i class="fa fa-calendar"></i>
                        <h3> <span class="timer">8469</span></h3>
                        <p>Completed Projects</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center ">
                        <i class="fa fa-star-o"></i>
                        <h3> <span class="timer">100</span>%</h3>
                        <p>Satisfied rate</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="fun-fact text-center">
                        <i class="fa fa-code"></i>
                        <h3> <span class="timer">06324</span></h3>
                        <p>Lines of Code</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fun-facts area ends -->

    <!-- Work area ends -->
    <section id="work" class="work-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-60 ">
                        <h2>our great <span>work</span> </h2>
                       <p> <span>Lorem</span> ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt
						ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Works filter -->
                <ul class="work filters text-center">
                    <li class="filter" data-filter="all">All</li>
                    <li class="filter" data-filter=".web">Webdesign</li>
                    <li class="filter" data-filter=".dev">Development</li>
                    <li class="filter" data-filter=".brand">Branding</li>
                    <li class="filter" data-filter=".illustrate">Illustration</li>
                </ul>
                <!-- / Works filter -->

            </div>

            <div class="portfolio">
                <div class="row work-items">
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix dev web">
                        <div class="work-item mt-30">
							<a href="#news-modal-1" data-toggle="modal">
								<div class="works_photo">
										<img src="assets/img/works/1.jpg" alt="">
									
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
								<h4 class="subtitle">Talking business people</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix brand dev ">
                        <div class="work-item mt-30">
                            <a href="#news-modal-2" data-toggle="modal">
								<div class="works_photo">
										<img src="assets/img/works/2.jpg" alt="">
									
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
								<h4 class="subtitle">Easy to customize</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix illustrate ">
                        <div class="work-item mt-30">
                            <a href="#news-modal-3" data-toggle="modal">
								<div class="works_photo">
										<img src="assets/img/works/3.jpg" alt="">
									
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
									<h4 class="subtitle">corporate meeting together</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix brand ">
                        <div class="work-item mt-30">
                            <a href="#news-modal-4" data-toggle="modal">
								<div class="works_photo">
									<img src="assets/img/works/4.jpg" alt="">
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
								<h4 class="subtitle">Executives corporate corridor</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix illustrate brand web ">
                        <div class="work-item mt-30">
                            <a href="#news-modal-5" data-toggle="modal">
								<div class="works_photo">
									<img src="assets/img/works/5.jpg" alt="">
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
								<h4 class="subtitle">businesspeople in the office</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
					
                    <!-- work item -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mix dev web">
                        <div class="work-item mt-30">
                            <a href="#news-modal-6" data-toggle="modal">
								<div class="works_photo">
									<img src="assets/img/works/6.jpg" alt="">
									<div class="overlay">
										<i class="fa fa-plus"></i>
									</div>
								</div>
							</a>
                            <div class="item-details">
								<h4 class="subtitle">Businessmen closing a deal</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing sed do eiusmod incididunt dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 1 Modals -->
            <div class="news-modal modal fade" id="news-modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/1.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 2 Modals -->
            <div class="news-modal modal fade" id="news-modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/2.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 3 Modals -->
            <div class="news-modal modal fade" id="news-modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/3.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 4 Modals -->
            <div class="news-modal modal fade" id="news-modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/4.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 5 Modals -->
            <div class="news-modal modal fade" id="news-modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/5.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- News 6 Modals -->
            <div class="news-modal modal fade" id="news-modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="modal-body">
								
                                    <img src="assets/img/works/6.jpg" alt="">
									
                                    <h4 class="subtitle">Talking business people</h4>
									
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>

                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure? On the other hand.</p>
									
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
        </div>
    </section>
    <!-- Work area ends -->

    <!-- callto action starts -->
    <section class="callto-action section-big ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-text pull-left">
                        <p>Are You Impressed With Our Amazing work?</p>
                        <h3>START BUILDING YOUR NEXT PROJECT WITH US</h3>
                    </div>
                    <div class="call-button pull-right">
                        <a class="action-button btn" href="#">get it now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- callto action ends -->

    <!-- Team area starts -->
    <section id="team" class="team-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30 ">
                        <h2>lovely team <span>members</span> </h2>
                        <p> <span>Lorem</span> ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt
					ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member mt-30">
                        <div class="team-photo">
                            <img src="assets/img/team/1.jpg" alt="">
							<div class="overlay">
								<div class="member-social">
									<a href="#"><i class="fa fa-rss"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
                        </div>
						 <div class="team-details text-center">
							<h4>Kevin Wyrick</h4>
							<p>Director</p>
						</div>
                        
                    </div>
                </div>
				
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member mt-30">
                        <div class="team-photo">
                            <img src="assets/img/team/2.jpg" alt="">
							<div class="overlay">
								<div class="member-social">
									<a href="#"><i class="fa fa-rss"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
                        </div>
						 <div class="team-details text-center">
							<h4>Myra Dillon</h4>
							<p>Designer</p>
						</div>
                        
                    </div>
                </div>
				
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member mt-30">
                        <div class="team-photo">
                            <img src="assets/img/team/3.jpg" alt="">
							<div class="overlay">
								<div class="member-social">
									<a href="#"><i class="fa fa-rss"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
                        </div>
						 <div class="team-details text-center">
							<h4>Eric Wood</h4>
							<p>Developer</p>
						</div>
                        
                    </div>
                </div>
				
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-team-member mt-30">
                        <div class="team-photo">
                            <img src="assets/img/team/4.jpg" alt="">
							<div class="overlay">
								<div class="member-social">
									<a href="#"><i class="fa fa-rss"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-skype"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</div>
							</div>
                        </div>
						 <div class="team-details text-center">
							<h4>Elissa Chapa</h4>
							<p>Project Manager</p>
						</div>
                        
                    </div>
                </div>
				
            </div>
        </div>
    </section>
    <!-- Team area ends -->

    <!-- Testimonial area starts -->
    <section id="testimonial" class="testimonial-area section-big">
        <div class="container">

            <div class="row">
                <div class="testimonial-list">

                    <!-- Testimonial item 1-->
                    <div class="single-testimonial">
                        <div class="featured_tes">
                            <img src="assets/img/testimonial/1.jpg" alt="">
                        </div>

                        <div class="feedback-text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sit amet magnaelit ate consectetur adipisicing elit sed do eiusmod tempor incididunt consectetur dolore magna aliqua.</p>
                            <h4>Carol Smith / <span>Director</span></h4>
                        </div>

                    </div>

                    <!-- Testimonial item 2-->
                    <div class="single-testimonial">
                        <div class="featured_tes">
                            <img src="assets/img/testimonial/2.jpg" alt="">
                        </div>
                        <div class="feedback-text">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sit amet magnaelit ate consectetur adipisicing elit sed do eiusmod tempor incididunt consectetur dolore magna aliqua.</p>
                            <h4>Carol Smith   / <span>Director</span> </h4>
                        </div>

                    </div>

                    <!-- Testimonial item 3-->
                    <div class="single-testimonial">
                        <img src="assets/img/testimonial/3.jpg" alt="">

                        <div class="feedback-text">

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ametfh consectetur dolore magna aliqua. Ut enim ad minim veniam dolor sit amet magnaelit ate consectetur adipisicing elit sed do eiusmod tempor incididunt consectetur dolore magna aliqua.</p>

                            <h4>Carol Smith   / <span>Director</span> </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial area ends -->


    <!-- Price area starts -->
    <section id="pricing" class="pricing-area pt-95">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30">
                        <h2>pricing <span>table</span> </h2> 
                        <p> <span>Lorem</span> ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt
						ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Pricing Table -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-item mt-30" data-connectors="1">
                        <div class="info">
                            <p class="level">free</p>
                            <p class="price">
                                <span class="number">$ 99</span>
                                <span class="month">/ mon</span>
                            </p>
                        </div>
                        <div class="features">
                            <ul>
                                <li>10 Projects</li>
                                <li>30 GB of Storage</li>
                                <li>5 Workspaces</li>
                                <li>Private Forums</li>
                                <li>Enhanced Security</li>
                            </ul>
                        </div>
                        <a class="btn" href="register.php?track=free">Register</a>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-item mt-30" data-connectors="1">
                        <div class="info">
                            <p class="level">basic</p>
                            <p class="price">
                                <span class="number">$ 199</span>
                                <span class="month">/ mon</span>
                            </p>
                        </div>
                        <div class="features">
                            <ul>
                                <li>10 Projects</li>
                                <li>30 GB of Storage</li>
                                <li>5 Workspaces</li>
                                <li>Private Forums</li>
                                <li>Enhanced Security</li>
                            </ul>
                        </div>
                        <a class="btn" href="register.php?track=basic">Register</a>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-item featured mt-30" data-connectors="1">
                        <div class="info">
                            <p class="level hbg">Plus</p>
                            <p class="price">
                                <span class="number">$ 599</span>
                                <span class="month">/ mon</span>
                            </p>
                        </div>
                        <div class="features">
                            <ul>
                                <li>10 Projects</li>
                                <li>30 GB of Storage</li>
                                <li>5 Workspaces</li>
                                <li>Private Forums</li>
                                <li>Enhanced Security</li>
                            </ul>
                        </div>
                        <a class="btn" href="register.php?track=plus">Register</a>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="price-item mt-30" data-connectors="1">
                        <div class="info">
                            <p class="level">Premium</p>
                            <p class="price">
                                <span class="number">$ 999</span>
                                <span class="month">/ mon</span>
                            </p>
                        </div>
                        <div class="features">
                            <ul>
                                <li>10 Projects</li>
                                <li>30 GB of Storage</li>
                                <li>5 Workspaces</li>
                                <li>Private Forums</li>
                                <li>Enhanced Security</li>
                            </ul>
                        </div>
                        <a class="btn" href="register.php?track=premuim">Register</a>
                    </div>
                </div>

            </div>
			
			<div class="row subscribe-area pt-95">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="subscribe-box">
                        <div class="newsletter">
                            <h1>Stay up to date</h1>
                            <p><span>Subscribe</span> to our Newsletter. We'll send email notifications everytime we release new Theme.</p>
                            <form id="mc-form" class="mc-form">
                                <div class="newsletter-form">
                                    <input type="email" autocomplete="off" id="mc-email" placeholder="Enter your email address" class="form-control">

                                    <button class="mc-submit" type="submit">Subscribe now</button>

                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div>
                                        <!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div>
                                        <!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div>
                                        <!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="video-area">
                        <div class="video-content text-center">
                            <a class="popup-youtube" href="http://www.youtube.com/watch?v=xtZE3sMv6lg">
                                <i class="fa fa-play"></i>
                            </a>
                           
                        </div>
                    </div>

                </div>
            </div>
			
			<div class="row choose-area pt-95">
				<div class="col-md-12">
					<div class="sub-section choose-title mb-30">
						<h3 class="sub-title">Why Choose Us ?</h3>
					</div>
				</div>
				
                <!-- About Text -->
                <div class="col-md-6 col-sm-12 col-xs-12 ">
                    <div class="choose-us">
                        <div class="choose-feature mt-30">
                            <i class="fa fa-rocket"></i>
                            <h3>New innovation leader</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting. Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>

                        <div class="choose-feature mt-30">
                            <i class="fa fa-trophy"></i>
                            <h3>Analysis & Consulting</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting. Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>

                        <div class="choose-feature mt-30">
                            <i class="fa  fa-paper-plane"></i>
                            <h3>EMAIL MARKETING</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting. Ipsum has been the industry's standard dummy text ever since.</p>
                        </div>

                    </div>
                </div>

                <!-- Choose Image -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="choose-img mt-30">
                        <img src="assets/img/choose/choose-img.png" alt="">
                    </div>
                </div>
            </div>
			
        </div>
    </section>
    <!-- Price area ends -->

	


    <!-- Contact area starts -->
    <section id="news" class="contact-area section-big">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-30 ">
                        <h2>OUR LATEST <span>NEWS</span> </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ametfh consectetur dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
					<div class="single-news">
						<div class="news-image">
							 <img src="assets/img/news/1.jpg" alt="">
							 <div class="new-date">
								<h4><span class="month">Jun</span> <span class="date">26</span></h4>
							</div> 
						</div>
						
						<div class="news-content">
                            <p class="news-meta text-muted">
                                <span><i class="fa fa-user"></i>Posted by admin</span>
                                <span><i class="fa fa-comment"></i>Comments</span>
                            </p>
							<a href="#blog-modal-1" data-toggle="modal">
                                <h3 class="subtitle">improve your creative thinking</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
                            <a class="btn" href="#blog-modal-1" data-toggle="modal">Read More</a>
                        </div>
						
					</div>
				</div>
                <div class="col-md-4">
					<div class="single-news">
						<div class="news-image">
							 <img src="assets/img/news/2.jpg" alt="">
							 <div class="new-date">
								<h4><span class="month">Jun</span> <span class="date">26</span></h4>
							</div> 
						</div>
						
						<div class="news-content">
                            <p class="news-meta text-muted">
                                <span><i class="fa fa-user"></i>Posted by admin</span>
                                <span><i class="fa fa-comment"></i>Comments</span>
                            </p>
							<a href="#blog-modal-2" data-toggle="modal">
                                <h3 class="subtitle">improve your creative thinking</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
                            <a class="btn" href="#blog-modal-2" data-toggle="modal">Read More</a>
                        </div>
						
					</div>
				</div>
                <div class="col-md-4">
					<div class="single-news">
						<div class="news-image">
							 <img src="assets/img/news/3.jpg" alt="">
							 <div class="new-date">
								<h4><span class="month">Jun</span> <span class="date">26</span></h4>
							</div> 
						</div>
						
						<div class="news-content">
                            <p class="news-meta text-muted">
                                <span><i class="fa fa-user"></i>Posted by admin</span>
                                <span><i class="fa fa-comment"></i>Comments</span>
                            </p>
							<a href="#blog-modal-3" data-toggle="modal">
                                <h3 class="subtitle">improve your creative thinking</h3>
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
                            <a class="btn" href="#blog-modal-3" data-toggle="modal">Read More</a>
                        </div>
						
					</div>
				</div>
				
				<!-- News 1 Modals -->
				<div class="news-modal modal fade" id="blog-modal-1" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
									
										<img src="assets/img/news/1.jpg" alt="">
										
										<div class="news-content">
											<p class="news-meta text-muted">
												<span><i class="fa fa-user"></i>Posted by admin</span>
												<span><i class="fa fa-comment"></i>Comments</span>
											</p>
											
											<h3 class="subtitle">improve your creative thinking</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
											
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
										</div>
										
										<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News 2 Modals -->
				<div class="news-modal modal fade" id="blog-modal-2" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
									
										<img src="assets/img/news/2.jpg" alt="">
										
										<div class="news-content">
											<p class="news-meta text-muted">
												<span><i class="fa fa-user"></i>Posted by admin</span>
												<span><i class="fa fa-comment"></i>Comments</span>
											</p>
											<h3 class="subtitle">improve your creative thinking</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
											
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
										</div>
										
										<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- News 3 Modals -->
				<div class="news-modal modal fade" id="blog-modal-3" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-content">
						<div class="close-modal" data-dismiss="modal">
							<div class="lr">
								<div class="rl">
								</div>
							</div>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<div class="modal-body">
									
										<img src="assets/img/news/3.jpg" alt="">
										
										<div class="news-content">
											<p class="news-meta text-muted">
												<span><i class="fa fa-user"></i>Posted by admin</span>
												<span><i class="fa fa-comment"></i>Comments</span>
											</p>
											<h3 class="subtitle">improve your creative thinking</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
											
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.,consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniamconsectetur adipisicing elit eniam.</p>
										</div>
										
										<button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
            </div>
        </div>
    </section>
    <!-- Contact area ends -->

 

    <?php
    include "includes/footer.php";
    ?>