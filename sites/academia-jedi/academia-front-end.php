<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia Front End | Academia Jedi</title>
  
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
          <img src="assets/img/front2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>front end</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
            O desenvolvedor front-end é responsável por "dar vida" à interface. Trabalha com a parte da aplicação que interage diretamente com o usuário. Por isso, é importante que esse desenvolvedor também se preocupe com a experiência do usuário.
            Na parte de estudo, este profissional foca em HTML (linguagem de marcação), CSS (linguagem de estilo) e JavaScript (linguagem de script/programação).
            </p>
            <p>
              Durante o curso você vai aprender: HTML e CSS, alinhamento, cores e formas, seletores CSS, CSS avançado, formulários, multimídia: imagens, áudio, vídeos e etc, SVG, Material Design Lite, um pouco de javascript e muito mais!
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  22/01/18
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
                Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 700,00</div><!-- /.valor -->
                <a href="https://pag.ae/bhrBlPC"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-front-end-academia-jedi-1.jpg" alt="Turma de Front End da Academia Jedi" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-front-end-academia-jedi-2.jpg" alt="Turma de Front End da Academia Jedi" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/kenobi.png" alt="" class="img-responsive">
              <div class="nome">Prof. José Carlos</div>
              <div class="texto-comentario">
                <p>Conhecido como Zé. Desenvolvedor na ThoughtWorks com experiência em Agile, Testes Automatizados, Rest API, Ruby, Java, Javascript, HTML5 e CSS3.</p>
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