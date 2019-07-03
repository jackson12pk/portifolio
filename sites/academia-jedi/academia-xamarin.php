<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia Xamarin | Academia Jedi</title>
  
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
          <img src="assets/img/xamarin2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>xamarin</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
            Xamarin é uma plataforma de desenvolvimento de aplicativos móveis para criar nativos iOS, Android e Windows aplicativos comuns c# / .NET código base, atingir 75% para quase 100% reutilização de código entre plataformas. Aplicativos escritos com Xamarin e c# têm acesso total a APIs da plataforma subjacente e a capacidade de criar interfaces do usuário nativas e compilados para os pacotes específicos de plataforma, há pouco impacto no desempenho de tempo de execução.
            </p>
            <p>
              No curso você irá aprender: Xamarin.Forms, MVVM, XAML, Introdução a Serviços com Azure, Comunicação com Redes Sociais e APIs, Notificações, Publicação do App na Loja e muito mais!
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
                  19/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  18:00 - 22:00 (Seg a Sex)
                </div>
              </div>

              <div class="col-md-6 mg-bt">
                <div class="requisitos">
                  Lógica de Programação                  
                  <br/>
                  C# Básico
                  <br />
                  Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 400,00</div><!-- /.valor -->
                <a href="https://pag.ae/bkrBlGz"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
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
              <img src="assets/img/leia.png" alt="" class="img-responsive">
              <div class="nome">Profa. Lhaís Rodrigues </div>
              <div class="texto-comentario">
                <p>Desenvolvedora mobile com mais de 3 anos no mercado já desenvolveu em plataformas como Windows Phone, Android, iOS (Swift), Ionic e Xamarin, além disso, atua como desenvolvedora Web e backend já trabalhando com .NET, Django, PHP, Node.js possui certificação na Maratona de Xamarin realizada pela Microsoft.</p>
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