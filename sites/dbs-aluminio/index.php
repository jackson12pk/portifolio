<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Metas -->
  <?php include "assets/inc/metas.php" ?>

  <!-- Head -->
  <?php include "assets/inc/head.php" ?>

  <title>DBS Alumínio</title>

  <!-- Header -->
  <?php include "assets/inc/header.php" ?>
  <link rel="stylesheet" href="assets/plugins/superslides/dist/stylesheets/superslides.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Slides -->
    <div id="slides">
      <ul class="slides-container">
        <li>
          <figure>
            <img src="assets/img/banner/11.jpg" alt="">
          </figure>
          <div class="container banner">
            <header>
              <h2>Segurança e sustentabilidade </h2>
              <p>A DBS Alumínio é a reunião entre qualidade em distribuir, desenvolver e executar insumos e produtos à base de alumínio.</p>
            </header>
          </div><!-- /.container -->
        </li>

        <li>
          <figure>
            <img src="assets/img/banner/22.jpg" alt="">
          </figure>
          <div class="container banner">
            <header>
              <h2>Soluções Inovadoras</h2>
              <p>Temos como propósito oferecer aos nossos clientes inovação em alumínio, aliados a eficiência operacional e excelência na distribuição.</p>
            </header>
          </div><!-- /.container -->
        </li>

        <li>
          <figure>
            <img src="assets/img/banner/33.jpg" alt="">
          </figure>
          <div class="container banner">
            <header>
              <h2>Qualidade de Vida</h2>
              <p>Pensamos no meio ambiente e nas pessoas e acreditamos que isso seja um dos nossos diferenciais quando falamos em inovação.</p>
            </header>
          </div><!-- /.container -->
        </li>

        <li>
          <figure>
            <img src="assets/img/banner/44.jpg" alt="">
          </figure>
          <div class="container banner">
            <header>
              <h2>Foco e Eficiência operacional </h2>
              <p>Indústria, construção civil e comunicação visual são os principais segmentos econômicos fundamentais que abastecemos.</p>
            </header>
          </div><!-- /.container -->
        </li>

      </ul><!-- /.slides-container -->

      <nav class="slides-navigation">
        <a href="#" class="prev"> <i class="fa fa-angle-left fa-3x"></i> </a>
        <a href="#" class="next"> <i class="fa fa-angle-right fa-3x"></i> </a>
      </nav><!-- /.slides-navigation -->
    </div><!-- /.slides -->

    <section id="produtos" class="text-center">
      <div class="container">
        <div class="row">

          <div class="col-md-4 col-sm-4 col-xs-6 fix-xs">
            <div class="produtos">
              <figure><img src="assets/img/porta.png" alt="" class="img-responsive"></figure>
              <h2>Lorem ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fuga deserunt similique iure tenetur debitis perspiciatis, modi, aut dolores illum! </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 fix-xs">
            <div class="produtos">
              <figure><img src="assets/img/basculante.png" alt="" class="img-responsive"></figure>
              <h2>Lorem ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fuga deserunt similique iure tenetur debitis perspiciatis, modi, aut dolores illum! </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-6 fix-xs">
            <div class="produtos">
              <figure><img src="assets/img/janela.png" alt="" class="img-responsive"></figure>
              <h2>Lorem ipsum</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet fuga deserunt similique iure tenetur debitis perspiciatis, modi, aut dolores illum!</p>
            </div>
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <section id="info">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="faleconosco">
              <header><h2>Fale Conosco!</h2></header>
              <figure><img src="http://placehold.it/640x420" alt="" class="img-responsive"></figure>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est dolorem alias vitae, dicta nam labore sunt ducimus. Inventore voluptate odio amet voluptatem expedita, quasi vero animi ratione perspiciatis, quam provident voluptatibus placeat deserunt? Ipsum aliquam sint ea praesentium provident omnis eveniet iusto ad iure, ipsa dolorum. Incidunt, eius! Autem, earum?</p>
            </div>
            <button class="btn ">Entrar em Contato</button>
          </div>
          <div class="col-md-6">
            <div class="ondeestamos">
              <header><h2>Onde Estamos</h2></header>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.1257049616183!2d-34.88784978509454!3d-8.088660994176548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab1f38b45bfddf%3A0x58027b1d17deeccf!2sAv.+Herculano+Bandeira%2C+523+-+Pina%2C+Recife+-+PE%2C+51110-131!5e0!3m2!1spt-BR!2sbr!4v1506602103260" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include "assets/inc/footer.php" ?>

    <!-- Js -->
    <?php include "assets/inc/js.php" ?>
    <script src="assets/plugins/superslides/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>


    <script>
      $('#slides').superslides({
        play: 5000,
        animation: 'fade',
        inherit_height_from: '#slides'
      });
    </script>

  </body>
  </html>