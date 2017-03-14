<?php 

require_once 'conta/php/class/freelancer.class.php';
$freela= new freelancer();
$freela->setId($id);
$avatar=$freela->buscarId();



?> <nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php"><img style="max-width:40px" src="img/iconfree.png"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">

    <li><a href="#">Como Funciona?</a></li>
    <li><a href="#">Dúvidas Frequentes</a></li>
</ul>
<form class="navbar-form navbar-left" action="pesquisar.php">
    <div class="form-group">
      <select class="form-control" name="categoria" type="submit">
        <option disabled selected="selected">Buscar Profissionais</option>
        <option>Administração</option>
        <option>Agronegócios e Agropecuária</option>
        <option>Comércio Exterior</option>
        <option>Segurança Privada</option>
        <option>Recursos Humanos</option>
        <option>Turismo</option>      
        <option>Gestão Financeira</option>
        <option>Gastronomia</option>
        <option>Consultor Imobiliários</option>
        <option>Logística</option>
        <option>Marketing</option>
        <option>Animação</option>
        <option>Arquitetura e Urbanismo</option>
        <option>Teatro</option>
        <option>Conservação e Restauro</option>
        <option>Dança</option>
        <option>Design de Moda</option>
        <option>Design de Interiores</option>
        <option>Design de Games</option>
        <option>Design Gráfico</option>
        <option>Fotografia</option>
        <option>Música</option>
        <option>Gestão Ambiental</option>
        <option>Ecologia</option>
        <option>Veterinário</option>
        <option>Informática</option>
        <option>Análise e Desenvolvimento de Sistemas</option>
        <option>Banco de Dados</option>
        <option>Redes de Computadores</option>
        <option>Segurança da Informação</option>
        <option>Tecnologia da Informação</option>
        <option>Desenvolvedor Web</option>
        <option>Direito</option>
        <option>Doméstica</option>
        <option>Tradutor e Intérprete</option>
        <option>Libras</option>
        <option>Publicidade e Propaganda</option>
        <option>Eventos</option>
        <option>Jornalismo</option>
        <option>Secretária</option>
        <option>Segurança no Trabalho</option>
        <option>Transporte</option>
        <option>Saúde e Bem-Estar</option>
        <option>Biomedicina</option>
        <option>Estética e Cosmética</option>
        <option>Educação Física</option>
        <option>Enfermagem</option>
        <option>Fisioterapia</option>
        <option>Fonoaudiologia</option>
        <option>Medicina</option>
        <option>Nutrição</option>
        <option>Odontologia</option>
        <option>Oftálmica</option>
        <option>Professor</option>
        <option>Psicologia</option>
    </select>
</div>
<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
<a href="pesquisar.php" class="btn btn-success">Profissionais</a>
</form>

<?php if(isset($_SESSION['idfreelancer'])){ ?>
<ul class="nav navbar-nav navbar-right">

    <li><a href="conta/f">Minha Conta</a></li>
    <li><a href="conta/f/sair.php">Sair</a></li>
    <div class="col-md-3" style="text-align:center">
      <img src="conta/f/<?php echo $avatar['urlavatar']?>" style="width:55px;height:55px;margin-top:5px;"class="img-circle" alt="Circular Image">
  </div>

</ul> <?php }else{ ?>

<ul class="nav navbar-nav navbar-right">
    <li><a href="login"><b>Login</b></a></li>
    <li><a href="cadastro">Cadastre-se</a></li>

</ul>
<?php } ?>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
