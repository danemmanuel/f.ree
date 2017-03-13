<?php 
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mentor Education Bootstrap Theme</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
        ======================================================= -->
      </head>
      <body>
        <!--Navigation bar-->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">Men<span>tor</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#feature">Features</a></li>
                <li><a href="#organisations">Organisations</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#pricing">Pricing</a></li>
                <li><a href="cadastro/">Cadastre-se</a></li>
                <?php 
                if (isset($_SESSION['idfreelancer'])) {
                  echo "<li class='btn-trial'><a href='conta/f'>Minha Conta</a></li>";
                } else{
                  echo "<li class='btn-trial'><a href='login/'>Login</a></li>";
                }

                ?>
                
              </ul>
            </div>
          </div>
        </nav>

        <div class="banner">
          <div class="bg-color">
            <div class="container">
              <div class="row">
                <div class="banner-text text-center">
                  <div class="text-border">
                    <h2 class="text-dec">Conectamos Pessoas à Freelancers</h2>
                  </div>
                  <div class="intro-para text-center quote">
                    <p class="big-text">Plataforma de Conexão para TODOS os tipos de Freelancer</p>
                    <p class="small-text">Divulgue seu trabalho autônomo ou encontre pessoas dispostas a solucionar seus problemas</p>
                    
                  </div>
                  <a href="#pricing" class="mouse-hover btn" style="background-color:#fff;font-weight:bold;"><div class="mouse"></div>Let's Go</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        require_once 'conta/php/class/freelancer.class.php';
        $freelancer2= new freelancer();

        $resp=$freelancer2->buscarTodos();
        ?>
        <section id ="pricing" class="section-padding">
          <div class="container">
            <div class="row">
              <div class="header-section text-center">
                <h2>Novos Freelancers!</h2>

                <p></p>
                <hr class="bottom-line">
              </div>
              <?php 
              foreach ($resp as $row) {

               require_once 'conta/php/class/servicos.class.php';
               require_once 'conta/php/class/areaatuacao.class.php';
               $servicos= new servicos();
               $idfreelancer=$row['idfreelancer'];
               $servicos->setIdFreelancer($idfreelancer);
               $resp2=$servicos->buscar();

               $areaatuacao= new areaatuacao();
               $areaatuacao->setIdFreelancer($idfreelancer);
               $resp3=$areaatuacao->buscar();


               ?>
               <div class="col-md-4 col-sm-4">
                <div class="price-table">
                  <!-- Plan  -->
                  <div class="pricing-head">

                    <h4><?php echo $row['nome'] ?></h4>
                    <div class="col-md-12"><img src="conta/f/<?php echo $row['urlavatar'] ?>" style="width:100px;height:100px;margin-bottom:20px;"class="img-circle" alt="Circular Image"></div>
                    <?php 
                    foreach ($resp3 as $row3) {
                     ?>
                     <div class="nomearea"><b>Minha Área:</b> <?php echo $row3['nomearea']; ?></div>
                     
                     <?php
                   }
                   ?>

                   <span class="fa"></span>
                   <div class="servicosof">O que posso te oferecer?</div>

                   <div class="listaservicos">  

                    <?php foreach ($resp2 as $row2) { 


                     echo $row2['nomeservico'];


                     ?>
                     <br>

                     <?php } ?>

                   </div>



                 </div>

                 <!-- Plean Detail -->
               </div>
               <div class="price-in mart-15">
                <a href="#" class="btn btn-bg green btn-block">Mais Informações!</a> 
              </div>
              
            </div>

            <?php } ?>

          </div>
        </div>
      </section>
      <section id ="feature" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Features</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
            <div class="feature-info">
              <div class="fea">
                <div class="col-md-4">
                  <div class="heading pull-right">
                    <h4>Latest Technologies</h4>
                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-css3"></i>
                  </div>
                </div>
              </div>
              <div class="fea">
                <div class="col-md-4">
                  <div class="heading pull-right">
                    <h4>Toons Background</h4>
                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-drupal"></i>
                  </div>
                </div>
              </div>
              <div class="fea">
                <div class="col-md-4">
                  <div class="heading pull-right">
                    <h4>Award Winning Design</h4>
                    <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
                  </div>
                  <div class="fea-img pull-left">
                    <i class="fa fa-trophy"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ feature-->
      <!--Organisations-->
      <section id ="organisations" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
                <div class="orga-stru">
                  <h3>65%</h3>
                  <p>Say NO!!</p>
                  <i class="fa fa-male"></i>
                </div>  
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
                <div class="orga-stru">
                  <h3>20%</h3>
                  <p>Says Yes!!</p>
                  <i class="fa fa-male"></i>
                </div>  
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">         
                <div class="orga-stru">
                  <h3>15%</h3>
                  <p>Can't Say!!</p>
                  <i class="fa fa-male"></i>
                </div>  
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-info">
                <hgroup>
                  <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
                  <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
                </hgroup>
                <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Organisations-->
      <!--Cta-->
      <section id="cta-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="text-center">Subscribe Now</h2>
              <p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
              <div class="cta-2-form text-center">
                <form action="#" method="post" id="workshop-newsletter-form">
                  <input name="" placeholder="Enter Your Email Address" type="email">
                  <input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
                </form>
              </div>   
            </div>
          </div>
        </div>
      </section>
      <!--/ Cta-->
      <!--work-shop-->
      <section id="work-shop" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Upcoming Workshop</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-html5 color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor HTML5 Workshop</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-css3 color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor CSS3 Workshop</h4>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="service-box text-center">
                <div class="icon-box">
                  <i class="fa fa-joomla color-green"></i>
                </div>
                <div class="icon-text">
                  <h4 class="ser-text">Mentor Joomla Workshop</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ work-shop-->
      <!--Faculity member-->
      <section id="faculity-member" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Meet Our Faculty Member</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container" >
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>   
                </div>                                
                <div class="pm-staff-profile-details text-center">  
                  <p class="pm-staff-profile-name">Bryan Johnson</p>
                  <p class="pm-staff-profile-title">Lead Software Engineer</p>

                  <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                </div>     
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container" >
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>   
                </div>                                
                <div class="pm-staff-profile-details text-center">  
                  <p class="pm-staff-profile-name">Bryan Johnson</p>
                  <p class="pm-staff-profile-title">Lead Software Engineer</p>

                  <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                </div>     
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="pm-staff-profile-container" >
                <div class="pm-staff-profile-image-wrapper text-center">
                  <div class="pm-staff-profile-image">
                    <img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
                  </div>   
                </div>                                
                <div class="pm-staff-profile-details text-center">  
                  <p class="pm-staff-profile-name">Bryan Johnson</p>
                  <p class="pm-staff-profile-title">Lead Software Engineer</p>

                  <p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
                </div>     
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Faculity member-->
      <!--Testimonial-->
      <section id="testimonial" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2 class="white">See What Our Customer Are Saying?</h2>
              <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line bg-white">
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-comment">
                <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
                <p class="text-name">Abraham Doe - Creative Dırector</p>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <div class="text-comment">
                <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
                <p class="text-name">Abraham Doe - Creative Dırector</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--/ Testimonial-->
      <!--Courses-->
      <section id ="courses" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Courses</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course01.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course02.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course03.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course04.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course05.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
            <div class="col-md-4 col-sm-6 padleft-right">
              <figure class="imghvr-fold-up">
                <img src="img/course06.jpg" class="img-responsive">
                <figcaption>
                  <h3>Course Name</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
                </figcaption>
                <a href="#"></a>
              </figure>
            </div>
          </div>
        </div>
      </section>

      <section id ="contact" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
              <h2>Contact Us</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
              <hr class="bottom-line">
            </div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                  <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
              </div>

              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
              </div>
            </form>

          </div>
        </div>
      </section>
      <!--/ Contact-->
      <!--Footer-->
      <footer id="footer" class="footer">
        <div class="container text-center">

          <h3>Start Your Free Trial Now!</h3>

          <form class="mc-trial row">
            <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
              <div class=" controls">
                <input name="name" placeholder="Enter Your Name" class="form-control" type="text">
              </div>
            </div><!-- End email input -->
            <div class="form-group col-md-3 col-sm-4">
              <div class=" controls">
                <input name="EMAIL" placeholder="Enter Your email" class="form-control" type="email">
              </div>
            </div><!-- End email input -->
            <div class="col-md-2 col-sm-4">
              <p>
                <button name="submit" type="submit" class="btn btn-block btn-submit">
                  Submit <i class="fa fa-arrow-right"></i></button>
                </p>
              </div>
            </form><!-- End newsletter-form -->
            <ul class="social-links">
              <li><a href="#link"><i class="fa fa-twitter fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-facebook fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-google-plus fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-dribbble fa-fw"></i></a></li>
              <li><a href="#link"><i class="fa fa-linkedin fa-fw"></i></a></li>
            </ul>
            ©2016 Mentor Theme. All rights reserved
            <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Mentor
              -->
              Designed by <a href="https://bootstrapmade.com/">Free Bootstrap Themes</a>
            </div>
          </div>
        </footer>
        <!--/ Footer-->

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="contactform/contactform.js"></script>

      </body>
      </html>