<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('font-awesome.min');
		echo $this->Html->css('style-user');


		echo $this->fetch('meta');
		//echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
       <!-- NAV SECTION -->
         <div class="navbar navbar-inverse navbar-fixed-top">
       
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $this->Html->image("OMA_logo.png",array('class' => 'img-logo','alt' => "logo")) ?></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home-sec">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                     <li><a href="#project">PROJECT</a></li>
                    <li><a href="#pricing">PRICING</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <li><a href="/home/login">Iniciar Sesi&oacute;n</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
    
    <!--HOME SECTION-->
    <div id="home-sec">   
    <div class="container"  >
        <div class="row text-center">
            <div  class="col-md-12" >
                <span class="head-main" >OMA</span>
                <h3 class="head-last col-md-8 col-md-offset-2  col-sm-8 col-sm-offset-2">ENV&Iacute;OS</h3>
         
                 
            </div>
        </div>
    </div>
   
    </div>
     <!--END HOME SECTION-->  
      <!--ABOUT SECTION-->
    <section id="about"  >
        <div class="container">
            <div class="row g-pad-bottom ">
                <div class="col-md-6 ">

                <div class="panel-group" id="accordion">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-plus"></i> SMALL INTRODUCTION
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
           Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.
           Aenean eget ligula id nulla ornare placerat vel a nulla. 
         
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-plus"></i>WORK EXPERIENCE
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                  <h3>Lorem ipsum dolor sit amet</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
           Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.
           Aenean eget ligula id nulla ornare placerat vel a nulla. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="fa fa-plus"></i>PROJECTS OUTLINES
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
           Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.
           Aenean eget ligula id nulla ornare placerat vel a nulla. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title panel-title-adjust">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
                                    <i class="fa fa-plus"></i>ACHIEVEMENTS
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <h3>Lorem ipsum dolor sit amet</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
           Vivamus sagittis egestas mauris ut vehicula. Cras viverra ac orci ac aliquam.
           Nulla eget condimentum mauris, eget tincidunt est. Quisque in luctus ligula.
           Aenean eget ligula id nulla ornare placerat vel a nulla. 
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
                 <div class="col-md-6 ">
                     <h1 >JHON DEO ALEX</h1>
                     <h4>WEB DESIGNER & DEVELOPER</h4>
                     <p>
                                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                                </p>
                       <a href="#" class="btn btn-primary btn-lg">DOWNLOAD MY RESUME</a>
                 </div>
                  </div>
                
          <div class="row text-center g-pad-bottom">
                
                <div class="col-md-12">
                      <h2>MY SKILL SET</h2>
                    <br />
                    <div class="alert-info">
                        <div class="progress progress-adjust">
  <div class="progress-bar progress-bar-success" style="width: 30%">
    <div class="skill-div">JQUERY 30%</div>  
    <span class="sr-only">30% Complete (success)</span>
  </div>
  <div class="progress-bar progress-bar-warning" style="width: 25%">
     <div class="skill-div"> HTML 25%</div> 
    <span class="sr-only">25% Complete (warning)</span>
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 20%">
      <div class="skill-div"> CSS 20%</div> 
    <span class="sr-only">20% Complete (danger)</span>
  </div>
     <div class="progress-bar progress-bar-primary" style="width: 15%">
      <div class="skill-div"> PHP 15%</div> 
    <span class="sr-only">15% Complete (danger)</span>
  </div>
</div>
                    </div>
                          

                    </div>
                
              
        </div>
        </div>
    </section>
    <!--END ABOUT SECTION-->
    <!-- TESTIMONIAL SECTION-->
    <section id="testimonial" >
        <div class="container">
    <div class="row ">
            <div class="col-md-12">
                <div id="carousel-example" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-example" data-slide-to="2" class=""></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                   
                                    <h4><i class="fa fa-quote-left"></i>
                                         Lorem ipsum dolor sit amet, consectetur adipiscing elit onec molestie non sem vel condimentum. 
                                        <i class="fa fa-quote-right"></i></h4>
                                     <div class="user-img pull-right">
                        <img src="img/user.gif" alt="" class="img-u image-responsive img-circle">
                    </div>
                                    <h5 class="pull-right"><strong class="c-set" >Lorem Dolor</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item active left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4> <i class="fa fa-quote-left"></i> Aenean faucibus luctus enim. Duis quis sem risu suspend lacinia elementum nunc. <i class="fa fa-quote-right"></i></h4>
                                         <div class="user-img pull-right">
                        <img src="img/user2.png" alt="" class="img-u image-responsive">
                    </div>
                                    <h5 class="pull-right"><strong class="c-set" >Faucibus luctus</strong></h5>
                                </div>
                            </div>
                        </div>
                        <div class="item next left">
                            <div class="container center">
                                <div class="col-md-6 col-md-offset-3 slide-custom">
                                    <h4><i class="fa fa-quote-left"></i>Sed ultricies, libero ut adipiscing fringilla, ante elit luctus lorem, a egestas dui metus a arcu condimentum. <i class="fa fa-quote-right"></i></h4>
                                        <div class="user-img pull-right">
                        <img src="img/user.gif" alt="" class="img-u image-responsive">
                    </div>
                                    <h5 class="pull-right"><strong class="c-set">Sed ultricies</strong></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </section>
     <!--END TESTIMONIAL SECTION-->
   <!--PROJECT SECTION-->
    <section id="project" >
        <div class="container">
            <div class="row">
                 <div class="col-md-6">
                     
                    <img src="img/project.jpg" class="img-responsive img-thumbnail" alt="">
                    </div>
        <div class="col-md-6">
                     
                     <h2>CURRENT PROJECT NAME</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
            
            <div class="alert alert-info text-center">
                          <h4> COMPANY : APPLE TECHNOLOGIES</h4> 
                          <hr>
                          <p>
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
                        </p>
                          <hr>
                           <a href="#" class="btn btn-info">Read Full Detalis</a> 
                        </div>
                    </div>
                
            </div>
             
        </div>
    </section>
     <!--END PROJECT SECTION-->
     <!--PRICING SECTION-->
    <section id="pricing">
        <div class="container">
             <div class="row text-center ">
               <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                             <h4>SIMPLE PLAN</h4> 
                            </div>
                            <div class="panel-body">
                                <div class="round-body">
            <div class="price-main">
                <span class="price-Unit"><i class="fa fa-dollar"></i> 10</span>
                <small>per hour</small>
            </div>
        </div>
                               <ul class="plan">      
                           <li><strong>Book For</strong> 100 Hours</li>
                           </ul>
                                <a href="#" class="btn btn-success btn-lg btn-block">ORDER NOW</a>
                            </div>
                           
                        </div>
                    </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="panel panel-info active-plan-price">
                            <div class="panel-heading">
                             <h4>VALUE PLAN</h4> 
                            </div>
                            <div class="panel-body">
                                <div class="round-body">
            <div class="price-main">
                <span class="price-Unit"><i class="fa fa-dollar"></i> 20</span>
                <small>per hour</small>
            </div>
        </div>
                               <ul class="plan">      
                            <li><strong>Book For</strong> 300 Hours</li>
                           </ul>
                                <a href="#" class="btn btn-info btn-lg btn-block">ORDER NOW</a>
                            </div>
                           
                        </div>
                    </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                             <h4>MEDIUM PLAN</h4> 
                            </div>
                            <div class="panel-body">
                                <div class="round-body">
            <div class="price-main">
                <span class="price-Unit"><i class="fa fa-dollar"></i> 50</span>
                <small>per hour</small>
            </div>
        </div>
                               <ul class="plan">      
                            <li><strong>Book For</strong> 400 Hours</li>
                           </ul>
                                <a href="#" class="btn btn-danger btn-lg btn-block">ORDER NOW</a>
                            </div>
                           
                        </div>
                    </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                             <h4>ADVANCE PLAN</h4> 
                            </div>
                            <div class="panel-body">
                                <div class="round-body">
            <div class="price-main">
                <span class="price-Unit"><i class="fa fa-dollar"></i> 75</span>
                <small>per hour</small>
            </div>
        </div>
                               <ul class="plan">      
                            <li><strong>Book For</strong> 500 Hours</li>
                           </ul>
                                <a href="#" class="btn btn-primary btn-lg btn-block">ORDER NOW</a>
                            </div>
                           
                        </div>
                    </div>
        </div>

        </div>
    </section>
     <!--END PRICING SECTION-->
     <!--CONTACT SECTION-->
     <section class="qry" id="contact" >
          <div class="container">
              <div class="row ">
                             <form>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Email address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" required="required" placeholder="Notes">
                                </div>
                            </div>
                            <div class="col-md-3">
                                                                   <button type="submit" class="btn btn-success">Submit Request</button>

                            </div>
                                 </form>
                        </div>
          </div>
     </section>
    <section >
       <iframe class="cnt" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2999841.293321206!2d-75.80920404999999!3d42.75594204999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew+York!5e0!3m2!1sen!2s!4v1395313088825"></iframe>
   <div class="add">
 <i>Address: </i> 230/45 , Newyork City, USA-305670
   </div>
       
         </section>
    
     <!--END CONTACT SECTION-->
  
    <!--FOOTER SECTION -->
    <div id="footer">
        2014 www.yourdomain.com | All Right Reserved  
         
    </div>
    <!-- END FOOTER SECTION -->

            <div class="right_col" role="main">
            	<div class="row tile_count">
            		<?php //echo $this->element('sql_dump'); ?>
 				</div>
    		</div>
        </div>
  </div>


<?php 
	echo $this->Html->script('jquery.min');
	echo $this->Html->script('bootstrap.min');
	echo $this->Html->script('custom-user');
?>
</body>
</html>