<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Empresarial Alexandre de Castro e Silva -  Inovador, como todo negócio deve ser</title>

  <!-- Page Css -->
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css"> 
  <?php include 'assets/inc/head.php' ?>

</head>
<body>
  <?php include 'assets/inc/header.php' ?>

  <div class="header-internas">
  </div>

  <section class="predio">
    <div class="wrapper">
      <div class="container">
        <div class="texto-interna text-center">
          <header class="titulo-internas"><h1>O Prédio</h1></header>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil dolorum placeat, ipsam. Voluptatem est sit laboriosam, debitis mollitia iure consequuntur! Ratione voluptatum harum numquam, eius vel itaque perferendis. Vel sed, unde praesentium repellat quos, cum culpa fuga vitae ullam harum vero eligendi ad ipsa! Quos natus, eveniet ab modi ullam?</p>
        </div><!-- /.texto-predio -->

        <div class="content-predio">
          <div class="owl-carousel owl-carousel-predio container-items-predio">
            
              <div class="item predio-item text-center">
                <div class="quantidade">
                  <h3>4</h3>
                </div>
                <div class="descricao">
                  <p>Elevadores</p>
                </div>
              </div><!-- /.predio-item -->
            
              <div class="item predio-item text-center">
                <div class="quantidade">
                  <h3>2</h3>
                </div>
                <div class="descricao">
                  <p>Escadas</p>
                </div>
              </div><!-- /.predio-item -->
            
              <div class="item predio-item text-center">
                <div class="quantidade">
                  <h3>1</h3>
                </div>
                <div class="descricao">
                  <p>Heliponto</p>
                </div>
              </div><!-- /.predio-item -->
            
              <div class="item predio-item text-center">
                <div class="quantidade">
                  <h3>24</h3>
                </div>
                <div class="descricao">
                  <p>Vagas de Estacionamento</p>
                </div>
              </div><!-- /.predio-item -->
          </div><!-- /.container-items-predio -->
        </div><!-- /.content-predio -->
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
  </section>
  
   <!-- Salas -->
  <section class="salas text-center">
    <header>
      <h1 class="titulo-line">Salas Disponíveis <span class="line-titulo"></span></h1>
      <!-- <h3 class="titulo-line"><span style="font-size:15px;">Fotos Ilustrativas</span> <span class="line-titulo"></span></h3> -->
    </header>
    <div class="container-fluid">
      <div class="row">
        <div class="salas-imgs">

          <div class="col-md-4 col-sm-6 col-xs-12 no-padding sala">
            <figure>
              <img src="assets/img/sala.jpg" alt="" class="img-responsive">
            </figure>
            <a href="tenha-seu-espaco-in.php?show=<?=$sala_id?>">
              <div class="legenda text-center">
                <div class="container">
                  <span>Sala</span>
                  <header><h3>Titulo</h3></header>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quod laudantium quas ea error nemo, impedit unde beatae labore eum.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 no-padding sala">
            <figure>
              <img src="assets/img/sala2.jpg" alt="" class="img-responsive">
            </figure>
            <a href="tenha-seu-espaco-in.php?show=<?=$sala_id?>">
              <div class="legenda text-center">
                <div class="container">
                  <span>Sala</span>
                  <header><h3>Titulo</h3></header>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quod laudantium quas ea error nemo, impedit unde beatae labore eum.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 no-padding sala">
            <figure>
              <img src="assets/img/sala.jpg" alt="" class="img-responsive">
            </figure>
            <a href="tenha-seu-espaco-in.php?show=<?=$sala_id?>">
              <div class="legenda text-center">
                <div class="container">
                  <span>Sala</span>
                  <header><h3>Titulo</h3></header>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo quod laudantium quas ea error nemo, impedit unde beatae labore eum.</p>
                </div>
              </div>
            </a>
          </div>

        </div><!-- /.salas-imgs -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section><!-- /Salas -->

  <!-- Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

  <!-- Owl-Carousel -->
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
  <script>

    $('.owl-carousel-predio').owlCarousel({
      autoplay: true,
      loop:true,
      center: false,
      margin:45,
      nav:false,
      dots: true,
      responsive:{
        0:{
          items:1
        },
        520:{
          items:2
        },

        1000:{
          items:4
        }
      }
    })
  </script>

</body>
</html>