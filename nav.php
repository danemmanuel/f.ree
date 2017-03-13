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
            <option>Administração Pública</option>
            <option>Ciências Aeronáuticas</option>
            <option>Pilotagem Profissional de Aeronaves</option>
            <option>Agronegócios e Agropecuária</option>
            <option>Ciências Atuariais</option>
            <option>Ciências Econômicas</option>
            <option>Ciências Contábeis</option>
            <option>Gestão Comercial</option>
            <option>Comércio Exterior</option>
            <option>Gestão de Segurança Privada</option>
            <option>Gestão de Recursos Humanos</option>
            <option>Gestão de Turismo</option>
            <option>Defesa e Gestão Estratégica Internacional</option>
            <option>Gestão Financeira</option>
            <option>Gastronomia</option>
            <option>Processos Gerenciais</option>
            <option>Gestão Pública</option>
            <option>Hotelaria</option>
            <option>Negócios Imobiliários</option>
            <option>Logística</option>
            <option>Marketing</option>
            <option>Segurança Pública</option>
            <option>Turismo</option>
            <option>Animação</option>
            <option>Arquitetura e Urbanismo</option>
            <option>História da Arte</option>
            <option>Comunicação das Artes do Corpo</option>
            <option>Produção Cênica</option>
            <option>Conservação e Restauro</option>
            <option>Dança</option>
            <option>Design de Moda</option>
            <option>Design de Interiores</option>
            <option>Design de Games</option>
            <option>Design</option>
            <option>Jogos Digitais</option>
            <option>Produção Fonográfica</option>
            <option>Fotografia</option>
            <option>Luteria</option>
            <option>Música</option>
            <option>TeatroCiências Agrárias</option>
            <option>Agroecologia</option>
            <option>Agronomia</option>
            <option>Ciência e Tecnologia de Alimentos</option>
            <option>Alimentos</option>
            <option>Gestão Ambiental</option>
            <option>Produção de Bebidas</option>
            <option>Biocombustíveis</option>
            <option>Ciências Biológicas</option>
            <option>Biotecnologia e Bioquímica</option>
            <option>Biotecnologia</option>
            <option>Ciências Naturais e Exatas</option>
            <option>Ecologia</option>
            <option>Geofísica</option>
            <option>Geologia</option>
            <option>Medicina Veterinária</option>
            <option>Meteorologia</option>
            <option>Oceanografia</option>
            <option>Produção Sucroalcooleira</option>
            <option>Zootecnia</option>
            <option>Ciências Exatas e Informática</option>
            <option>Análise e Desenvolvimento de Sistemas</option>
            <option>Astronomia</option>
            <option>Banco de Dados</option>
            <option>Informática Biomédica</option>
            <option>Ciência e Tecnologia</option>
            <option>Ciência da Computação</option>
            <option>Computação</option>
            <option>Redes de Computadores</option>
            <option>Segurança da Informação</option>
            <option>Gestão da Tecnologia da Informação</option>
            <option>Sistemas de Informação</option>
            <option>Estatística</option>
            <option>Física</option>
            <option>Sistemas para Internet</option>
            <option>Matemática</option>
            <option>Nanotecnologia</option>
            <option>Química</option>
            <option>Ciências Sociais e Humanas</option>
            <option>Arqueologia</option>
            <option>Comunicação Assistiva</option>
            <option>Ciências Sociais</option>
            <option>Ciências Humanas</option>
            <option>Gestão de Cooperativas</option>
            <option>Cooperativismo</option>
            <option>Escrita Criativa</option>
            <option>Estudos de Gênero e Diversidade</option>
            <option>Direito</option>
            <option>Economia Doméstica</option>
            <option>Tradutor e Intérprete</option>
            <option>Filosofia</option>
            <option>Geografia</option>
            <option>História</option>
            <option>Relações Internacionais</option>
            <option>Letras</option>
            <option>Libras</option>
            <option>Linguística</option>
            <option>Museologia</option>
            <option>Pedagogia</option>
            <option>Psicopedagogia</option>
            <option>Serviço Social</option>
            <option>Teologia</option>
            <option>Comunicação e Informação</option>
            <option>Arquivologia</option>
            <option>Cinema e Audiovisual</option>
            <option>Produção Audiovisual</option>
            <option>Biblioteconomia</option>
            <option>Comunicação Institucional</option>
            <option>Comunicação e Multimeios</option>
            <option>Comunicação Organizacional</option>
            <option>Produção Cultural</option>
            <option>Gestão da Informação</option>
            <option>Estudos de Mídia</option>
            <option>Publicidade e Propaganda</option>
            <option>Rádio e TV</option>
            <option>Produção Editorial</option>
            <option>Educomunicação</option>
            <option>Eventos</option>
            <option>Secretariado Executivo</option>
            <option>Jornalismo</option>
            <option>Produção Multimídia</option>
            <option>Produção Publicitária</option>
            <option>Relações Públicas</option>
            <option>Secretariado</option>
            <option>Engenharia e Produção</option>
            <option>Engenharia Acústica</option>
            <option>Engenharia Aeronáutica</option>
            <option>Manutenção de Aeronaves</option>
            <option>Engenharia Agrícola</option>
            <option>Agrimensura</option>
            <option>Engenharia Cartográfica e de Agrimensura</option>
            <option>Engenharia de Alimentos</option>
            <option>Saneamento Ambiental</option>
            <option>Engenharia Ambiental e Sanitária</option>
            <option>Aquicultura</option>
            <option>Automação Industrial</option>
            <option>Engenharia de Controle e Automação</option>
            <option>Engenharia Biomédica</option>
            <option>Sistemas Biomédicos</option>
            <option>Engenharia de Bioprocessos e Biotecnologia</option>
            <option>Engenharia de Biossistemas</option>
            <option>Papel e Celulose</option>
            <option>Construção Civil</option>
            <option>Engenharia Civil</option>
            <option>Engenharia da Computação</option>
            <option>Construção Naval</option>
            <option>Gestão da Produção Industrial</option>
            <option>Engenharia de Transporte e da Mobilidade</option>
            <option>Gestão da Qualidade</option>
            <option>Engenharia de Telecomunicações</option>
            <option>Engenharia de Segurança no Trabalho</option>
            <option>Engenharia de Petróleo</option>
            <option>Sistemas de Telecomunicações</option>
            <option>Engenharia de Software</option>
            <option>Engenharia de Inovação</option>
            <option>Engenharia de Sistemas</option>
            <option>Engenharia de Produção</option>
            <option>Engenharia de Pesca</option>
            <option>Engenharia de Minas</option>
            <option>Engenharia de Materiais</option>
            <option>Engenharia de Energia</option>
            <option>Irrigação e Drenagem</option>
            <option>Petróleo e Gás</option>
            <option>Engenharia Elétrica</option>
            <option>Sistemas Elétricos</option>
            <option>Engenharia Eletrônica</option>
            <option>Eletrônica Industrial</option>
            <option>Eletrotécnica Industrial</option>
            <option>Sistemas Embarcados</option>
            <option>Engenharia Têxtil</option>
            <option>Engenharia Metalúrgica</option>
            <option>Engenharia Mecânica</option>
            <option>Engenharia Física</option>
            <option>Engenharia Hídrica</option>
            <option>Engenharia Mecatrônica</option>
            <option>Engenharia Química</option>
            <option>Engenharia Industrial Madeireira</option>
            <option>Engenharia Nuclear</option>
            <option>Engenharia Naval</option>
            <option>Engenharia Florestal</option>
            <option>Fabricação Mecânica</option>
            <option>Geoprocessamento</option>
            <option>Mecatrônica Industrial</option>
            <option>Manutenção Industrial</option>
            <option>Materiais</option>
            <option>Processos Metalúrgicos</option>
            <option>Mineração</option>
            <option>Processos Químicos</option>
            <option>Produção Têxtil</option>
            <option>Segurança no Trabalho</option>
            <option>Silvicultura</option>
            <option>Transporte</option>
            <option>Saúde e Bem-Estar</option>
            <option>Biomedicina</option>
            <option>Saúde Coletiva</option>
            <option>Estética e Cosmética</option>
            <option>Gestão Desportiva e de Lazer</option>
            <option>Óptica e Optometria</option>
            <option>Educação Física</option>
            <option>Gestão em Saúde</option>
            <option>Enfermagem</option>
            <option>Esporte</option>
            <option>Farmácia</option>
            <option>Fisioterapia</option>
            <option>Fonoaudiologia</option>
            <option>Gerontologia</option>
            <option>Gestão Hospitalar</option>
            <option>Medicina</option>
            <option>Musicoterapia</option>
            <option>Naturologia</option>
            <option>Nutrição</option>
            <option>Obstetrícia</option>
            <option>Terapia Ocupacional</option>
            <option>Odontologia</option>
            <option>Oftálmica</option>
            <option>Psicologia</option>
            <option>Quiropraxia</option>
            <option>Radiologia</option>
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
