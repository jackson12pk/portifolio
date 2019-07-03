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
  <link rel="stylesheet" href="assets/plugins/fancybox/jquery.fancybox.min.css"> 

  <?php include 'assets/inc/head.php' ?>

</head>
<body>
  <?php include 'assets/inc/header.php' ?>

  <div class="header-internas">
  </div>

  <section class="tenha-seu-espaco">
    <div class="wrapper">
      <div class="container">
        <div class="texto-interna text-center">
          <header class="titulo-internas"><h1>Tenha seu espaço</h1></header>
          <p>Cada sala de 151,82 m² possui 3 WC sociais, uma copa e uma casa de máquina destinada ao ar- condicionado, além do piso elevado já instalado.</p>
        </div><!-- /.texto-predio -->

        <div class="row">

          <div class="item-espaco col-md-6">
            <div class="col-md-6">
              <div class="disponivel">
                Disponível
              </div>
              <div class="owl-carousel-espaco slide-espaco">
                <div class="item">
                  <a data-fancybox="gallery" href="assets/img/sala.jpg">
                    <figure><img src="assets/img/sala.jpg" alt="" class="img-responsive"></figure>
                  </a>
                </div><!-- /.item -->
                <div class="item">
                  <a data-fancybox="gallery" href="assets/img/sala2.jpg">
                    <figure><img src="assets/img/sala2.jpg" alt="" class="img-responsive"></figure>
                  </a>
                </div><!-- /.item -->
              </div><!-- /.owl-carousel-espaco -->
            </div>

            <div class="col-md-6">
              <div class="espaco">
                <h3>Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus, pariatur totam labore, cum odio.</p>
                <div class="descricao-espaco">
                  <div><b>andar: </b>11º</div>
                  <div><b>numero: </b>22</div>
                  <div><b>metragem: </b>9,99m</div>
                </div><!-- /.descricao-espaco -->
                <!-- <a href="tenha-seu-espaco-in.php?show=<?=$sala_id?>" class="btn-detalhes">Detalhes</a> -->
              </div><!-- /.espaco -->
            </div>
          </div><!-- /.item-espaco -->

          <div class="item-espaco col-md-6">
            <div class="col-md-6">
              <div class="indisponivel">
                indisponivel
              </div>
              <div class="owl-carousel-espaco slide-espaco">
                <div class="item">
                  <a data-fancybox="gallery" href="assets/img/sala.jpg">
                    <figure><img src="assets/img/sala.jpg" alt="" class="img-responsive"></figure>
                  </a>
                </div><!-- /.item -->
                <div class="item">
                  <a data-fancybox="gallery" href="assets/img/sala2.jpg">
                    <figure><img src="assets/img/sala2.jpg" alt="" class="img-responsive"></figure>
                  </a>
                </div><!-- /.item -->
              </div><!-- /.owl-carousel-espaco -->
            </div>

            <div class="col-md-6">
              <div class="espaco">
                <h3>Titulo</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit delectus, pariatur totam labore, cum odio.</p>
                <div class="descricao-espaco">
                  <div><b>andar: </b>11º</div>
                  <div><b>numero: </b>22</div>
                  <div><b>metragem: </b>9,99m</div>
                </div><!-- /.descricao-espaco -->
                <!-- <a href="tenha-seu-espaco-in.php?show=<?=$sala_id?>" class="btn-detalhes">Detalhes</a> -->
              </div><!-- /.espaco -->
            </div>
          </div><!-- /.item-espaco -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
  </section>

  <!-- Page Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

  <!-- Fancybox -->
  <script src="assets/plugins/fancybox/jquery.fancybox.min.js"></script>

  <!-- Owl-Carousel -->
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

  <script>
    $('.owl-carousel-espaco').owlCarousel({
      autoplay: true,
      loop:true,
      center: false,
      margin:30,
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