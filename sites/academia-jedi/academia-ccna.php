<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia CCNA | Academia Jedi</title>
  
</head>
<body>
  <!-- Preload -->
  <?php include "assets/inc/preload.php" ?>

  <!-- Navbar -->
  <?php include "assets/inc/navbar.php" ?>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.min.css">

  <div class="wrapper overflow wrapper-interna">
    <div class="container">
      <div class="col-md-1  titulo-internas hidden-xs">
        <a href="academias"><header><h1 class="voltar-interna">voltar às academias</h1></header></a>
      </div><!-- /.titulo-internas -->

      <div class="col-md-11 col-md-offset-1 titulo-academia">
        <figure>
          <img src="assets/img/ccna2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>ccna</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
              Este curso visa preparar o aluno para o exame de Certificação CCNA 200-125 (Cisco Certified Network Associate), apresentando conceitos de rede de computadores, bem como configurações e resoluções de problemas em dispositivos de rede.
            </p>
            <p>
              Capacitar o Aluno para a compreensão e aplicabilidade dos fundamentos de redes, bem como, instalar, operar, configurar e verificar um cenário com os protocolos IPv4 e IPv6, incluindo configurações de equipamentos (Switch e Roteador) e protocolos LAN e WAN.
            </p>
            <p>
              Conteúdos Programáticos:
              •	Fundamentos de Redes;
              •	Configuração de um sistema operacional de rede;
              •	Endereçamentos IPv4 e IPv6;
              •	LAN e Switching;
              •	STP e VLANs;
              •	Operações dos Roteadores Cisco;
              •	Tecnologias de WAN;
              •	Roteamento IP;
              •	Protocolos de Roteamento;
              •	IP Services;
              •	Troubleshooting;
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  17/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="data-conclusao">
                  02/02/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  18:00 - 22:00 (Seg a Sex)
                </div>
              </div>

              <div class="col-md-6 mg-bt">
                <div class="requisitos">
                  Básico de redes
                  <br />
                  Básico do protocolo TCP/IP
                  <br />
                  Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 1.250,00</div><!-- /.valor -->
                <a href="https://pag.ae/bcrBl3k"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="http://placehold.it/240x240" alt="" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="http://placehold.it/240x240" alt="" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/kenobi.png" alt="" class="img-responsive">
              <div class="nome">Prof. André Soares</div>
              <div class="texto-comentario">
                <p>Pós-Graduado em Telecomunicações e Redes de Computadores pela Estácio, Graduado em Redes de Computadores pela Unibratec, também cursou o Técnico em Redes de Computadores pela Unibratec.
                  Profissional na área de tecnologia da informação com 7+ anos de experiência, dos quais, os últimos anos trabalhando na Vectra Consultoria e Serviços, trabalhando diretamente em um ISP (Internet Service Provider), do governo do estado de Pernambuco, utilizando ambiente de serviços gerenciados em redes Cisco.
                  Tenho estado envolvido em treinamento oficial da Cisco NetAcademy como instrutor oficial Cisco CCNA, ensinando indivíduos em sala de aula.
                  Profissional certificado Cisco®  CCNA R&S, CCAI, ITIL Foundation, ISO/IEC 20.000.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.row -->

    </div><!-- /.container -->

  </div><!-- /.wrapper -->

  <!-- Js -->
  <?php include "assets/inc/js.php" ?>

  <!-- Owl Carousel Js -->
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

  <script>
    $('.owl-carousel').owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      autoHeight:true,
      loop:true,
      margin: 30,
      nav: false,
      items: 1
    });

    $('.owl-carousel-parceiros').owlCarousel({
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      autoHeight:true,
      loop:true,
      margin: 30,
      nav: false,
      dots: false,
      items: 2,
      responsive : {
        0 : {
          items : 1
        },
        420 : {
          items : 2
        },
        678 : {
          items : 3
        },
        768 : {
          items : 4
        },
        1199 : {
          items : 5
        }
      }
    })

     // Written by @labnol 
   </script>
 </body>
 </html>