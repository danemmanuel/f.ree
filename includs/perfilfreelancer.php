<?php 

 require_once 'conta/php/class/freelancer.class.php';
 require_once 'conta/php/class/servicos.class.php';
 require_once 'conta/php/class/areaatuacao.class.php';
 require_once 'conta/php/class/habilidades.class.php';
 $habilidades= new habilidades();
 $servicos= new servicos();
 $areaatuacao= new areaatuacao();
 $freelancer= new freelancer();

 $freelancer->setId($idfreelancer);
 $resp=$freelancer->buscarId();



 $areaatuacao->setIdFreelancer($idfreelancer);
 $resp3=$areaatuacao->buscarAll();


 $servicos->setIdFreelancer($idfreelancer);
 $resp2=$servicos->buscarAll();

 $habilidades->setIdFreelancer($idfreelancer);
 $resp4=$habilidades->buscarAll();

  ?>