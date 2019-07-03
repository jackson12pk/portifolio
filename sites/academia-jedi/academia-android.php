<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia Android | Academia Jedi</title>
  
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
          <img src="assets/img/android2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>Android</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
            Em Maio de 2017 no Google I/O 17 os engenheiros do Google android anunciaram a Kotlin como a mais nova linguagem de programação oficial para desenvolvimento de aplicativos Android. No Curso de Android Developer com Kotlin você vai aprender toda a base necessária da linguagem Kotlin, todos seus princípios a sintaxe, como funciona a criação de variáveis, estruturas condicionais, orientação a objeto com Kotlin.
            </p>
            <p>
            Você irá aprender desde como criar uma tela no android com um simples Hello Word até uma comunicação com Webservice, iremos ver na prática como funciona o conceito de activitys, como fazer um layout que se adapte a diversos tamanhos de telas, criar layouts utilizando o Material Design, como o android trabalha com persistência de dados, exibir notificações no seu app, criar serviços que rodem em background, trabalhar com mapas, acessar recursos do sistema android como por exemplo a câmera, como publicar seu app no Google Play e muito mais.
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  15/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="data-conclusao">
                  26/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  19:00 - 22:00 (Seg a Sex)
                </div>
              </div>

              <div class="col-md-6 mg-bt">
                <div class="requisitos">
                  Lógica de Programação
                  <br />
                  Orientação a Objetos
                  <br />
                  Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 700,00</div><!-- /.valor -->
                <a href="https://pag.ae/bjrBlkn"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-android-academia-jedi-foto-1.jpg" alt="Turma de Android da Academia Jedi" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-android-academia-jedi-foto-2.jpg" alt="Turma de Android da Academia Jedi" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/kenobi.png" alt="" class="img-responsive">
              <div class="nome">Prof. Alex Soares</div>
              <div class="texto-comentario">
                <p>Graduando de Analise e Desenvolvimento de sistema pela FIAP, trabalha com desenvolvimento móvel desde os 18 anos com inicio de carreira no setor de mobilidade na Procenge Tecnologia onde trabalhou com um dos principais produtos da empresa, atualmente trabalha na Trinity Soluções atuando como desenvolvedor pleno e é responsável pela parte android no projeto da FedEx. Entusiasta de tecnologias moveis onde ja trabalhou com desenvolvimento utilizando linguagem nativas para iOS, Windows Phone e Android.</p>
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