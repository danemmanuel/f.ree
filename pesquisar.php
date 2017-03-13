<?php 
session_start();
$id=$_SESSION['idfreelancer'];
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
        <?php require_once'nav.php'; ?>




        <?php 
        if (empty($_GET['categoria'])) {

          ?>
          <?php 
          require_once 'conta/php/class/freelancer.class.php';
          $freelancer2= new freelancer();

          $resp=$freelancer2->buscarTodos();
          ?>
          <section id ="pricing" class="section-padding">
            <div class="container">
              <div class="row">
                <div class="header-section text-center">
                  <h2>Encontre profissionais talentosos para...</h2>
                  <hr class="bottom-line">
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                      <div class="hoverimg">Desenhar meu Site</div>
                      <img src="img/course01.jpg" class="img-responsive">
                      <figcaption>
                        <div class="verfreela">Ver Freelancers</div>
                      </figcaption>
                      <a href="pesquisar.php?categoria=sistemas para internet"></a>
                    </figure>
                  </div>

                  <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                      <div class="hoverimg">Desenhar meu Site</div>
                      <img src="img/course01.jpg" class="img-responsive">
                      <figcaption>
                        <div class="verfreela">Ver Freelancers</div>
                      </figcaption>
                      <a href="google.com"></a>
                    </figure>
                  </div>

                  <div class="col-md-4 col-sm-6 padleft-right">
                    <figure class="imghvr-fold-up">
                      <div class="hoverimg">Desenhar meu Site</div>
                      <img src="img/course01.jpg" class="img-responsive">
                      <figcaption>
                        <div class="verfreela">Ver Freelancers</div>
                      </figcaption>
                      <a href="google.com"></a>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </section>




        </body>
        </html>
        <?php }
        else{

          $categoria=$_GET['categoria'];



          ?>
          <section id ="contact" class="section-padding">
            <div class="header-section text-center">
              <h2>Freelancers para <?php echo $categoria ?>!</h2>

              <p></p>
              <hr class="bottom-line">
            </div>



            <?php


            require_once 'conta/php/class/areaatuacao.class.php';
            require_once 'conta/php/class/freelancer.class.php';
            require_once 'conta/php/class/servicos.class.php';


            $area= new areaatuacao();
            $freelancer= new freelancer();
            $servicos= new servicos();
            $area->setNomearea($categoria);
            $resp=$area->buscarCategoria();


            if ($resp==NULL) { ?>
               <div class="text-center">
              <h2 style="font-size:40px;background-color:#e63d3d;color:#fff;padding:15px;">Não há resultados para a busca!</h2>
            

              <p></p>
          
            </div>
            <?php   }else{
              foreach ($resp as $row) {
               $idfreelancer= $row['idfreelancer'];

               $freelancer->setId($idfreelancer);
               $resp2=$freelancer->buscarCategoria();
               foreach ($resp2 as $row2) { ?>
               <div class="col-md-4 col-sm-4">
                <div class="price-table">
                  <!-- Plan  -->
                  <div class="pricing-head">

                    <h4><?php echo $row2['nome'] ?></h4>
                    <div class="col-md-12">
                      <img src="conta/f/<?php echo $row2['urlavatar'] ?>" style="width:100px;height:100px;margin-bottom:20px;"class="img-circle" alt="Circular Image">
                    </div>

                    <span class="fa"></span>
                    <div class="servicosof">O que posso te oferecer?</div>

                    <div class="listaservicos">  
                      <?php  
                      $servicos->setIdFreelancer($idfreelancer);
                      $resp3=$servicos->buscar(); 

                      foreach ($resp3 as $row3) {
                        echo "".$row3['nomeservico'] ."|";
                      }



                      ?>
                      <div class="resumo"><?php echo substr($row2['resumo'], 0, 150); ?> [...]</div>


                    </div>
                  </div>
                </div>
                <div class="price-in mart-15">
                  <a href="freelancer.php?idfreelancer=<?php echo $idfreelancer  ?>" class="btn btn-bg green btn-block">Mais Informações!</a> 
                </div>
              </div>


            </section>



            <?php }
          }
        }

      } ?>
