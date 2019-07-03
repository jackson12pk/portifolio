<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Empresarial Alexandre de Castro e Silva -  Inovador, como todo negócio deve ser</title>


  <!-- Page Css -->
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css"> 
  <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
  <?php include 'assets/inc/head.php' ?>

</head>
<body>
  <?php include 'assets/inc/header.php' ?>

  <div class="header-internas">
  </div>

  <section class="localizacao">
    <div class="wrapper">
      <div class="container">
        <div class="texto-interna text-center">
          <header class="titulo-internas"><h1>Localização</h1></header>
          <p>Boa Viagem é hoje um bairro que alia a beleza de suas praias e a nobreza de sua área residencial a um agitado pólo comercial e financeiro. O local é considerado um importante centro administrativo e possui o maior complexo hoteleiro da região, agregando à volta do Empresarial Alexandre de Castro e Silva, restaurantes, bares, bancos, consulados, academias de ginástica, lojas, escolas e um dos maiores shoppings do Brasil.
          <br/>
          O lugar perfeito para a sua empresa</p>
        </div><!-- /.texto-predio -->

        <div class="row fix-row">
          <div class="col-md-12">
            
            <div id="map"></div>

            <form class="form-group" id="form-localizacao" method="post" action="">
              <input type="text" class="form-control" id="txtEnderecoPartida" name="txtEnderecoPartida" placeholder="Digite seu ponto de partida">
              <input id="btnEnviar" value="Traçar Rota" name="btnEnviar" type="submit" class="btn"/>
            </form>
          </div>
        </div><!-- /.row -->  
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
  </section>

  <!-- Page Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

  <!-- Maps -->
  <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAljsgH0oEvPeQ-TVAUXKmqapNQPl-a42s&amp;sensor=false"></script>
  <script src="assets/js/maps.js"></script>

  <!-- Owl-Carousel -->
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

  <script>
    $('.owl-carousel-espaco').owlCarousel({
      autoplay: true,
      loop:true,
      center: false,
      margin:5,
      nav:true,
      dots: false,
      responsive:{
        0:{
          items:1
        },
        1000:{
          items:1
        }
      }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right"></i>');
  </script>

</body>
</html>