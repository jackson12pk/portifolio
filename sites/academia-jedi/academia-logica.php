<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia Lógica de Programação | Academia Jedi</title>

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
          <img src="assets/img/logica2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>lógica de Programação</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
            Diferentemente do que muitos pensam, programação não é um monte de código que poucos conseguem entender. No fundo, programar é ensinar uma máquina a resolver problemas. Todos nós resolvemos problemas e tomamos decisões o tempo todo! Programação é uma forma de automatizar decisões e atividades dando comandos para que um equipamento eletrônico execute a tarefa autonomamente.
            </p>
            <p>
              Durante a nossa jornada você vai aprender: algoritmo, variáveis, operadores númericos, lógicos e relacionais, tabela verdade, concatenação, condicionais, repetidores e muito mais!
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  06/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="data-conclusao">
                  03/02/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  08:30 - 12:30 (Sábados)
                </div>
              </div>

              <div class="col-md-6 mg-bt">
                <div class="requisitos">
                Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 400,00</div><!-- /.valor -->
                <a href="https://pag.ae/bdrBlTF"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-logica-academia-jedi-1.jpg" alt="Turma de Lógica de Programação da Academia Jedi" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-logica-academia-jedi-2.jpg" alt="Turma de Lógica de Programação da Academia Jedi" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/kenobi.png" alt="" class="img-responsive">
              <div class="nome">Prof. Leonardo Roberto Marinho</div>
              <div class="texto-comentario">
                <p>Professor de desenvolvimento de sistemas e Analista de Sistemas pós-graduado em gestão de TI e graduado em desenvolvimento de sistemas para web. Trabalha na área de informática há mais de 10 anos, a maior parte destes na área de desenvolvimento de softwares e ministrando aulas na área de TI . Atua como pesquisador em um grupo de pesquisa da UFRPE. Atualmente ministra aulas no ensino superior (Uninabuco) e pós-graduação na área TI e marketing digital (FG), também é Analista de Sistemas na Avanade do Brasil (joint venture entre Microsoft e Accenture), coordena equipes de desenvolvimento e desenvolve soluções em forma de softwares para grandes empresas. Conhecimentos em coordenação de projetos e análise/desenvolvimento de sistemas em fábrica de software. Natural de Vila Velha - ES, corintiano roxo, apaixonado pela sua família e por sua profissão!</p>
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