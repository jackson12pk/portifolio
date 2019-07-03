<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Empresarial Alexandre de Castro e Silva - Inovador, como todo negócio deve ser</title>

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

  <section class="fale-conosco-interna">
    <div class="wrapper">
      <div class="container">
        <div class="texto-interna text-center">
          <header class="titulo-internas"><h1>Fale Conosco</h1></header>
          <p>Entre em contato conosco preenchendo o formulário abaixo, enviando um e-mail ou através do telefone para informações e agendamento de visitas.</p>
        </div><!-- /.texto-predio -->
        <div class="row">
          <div class="col-md-6">
            <div class="contato text-center">
            <p>Fone</p>
            <h2><a href="tel:8134216277">81. 3463-0414</a></h2>
            <p>Email</p>
            <h2><a href="mailto:contato@empresarial-acs.com.br">comercial@empresarial-acs.com.br</a></h2>
            <!--<p id="contato-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil perspiciatis ullam facilis asperiores odio quibusdam repellendus ea voluptatum provident, repellat quasi numquam vitae temporibus harum. Suscipit, aliquid, nesciunt.</p>-->
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-contato">
              <form action="" method="POST">
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Nome" name="nome" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="mail" placeholder="Email" name="email" class="form-control">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" placeholder="Telefone" name="telefone" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea placeholder="Mensagem" name="mensagem" class="form-control" rows="5"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" value="Enviar" class="btn-detalhes">
                </div>
              </form>
            </div>
          </div>
        </div>
        
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
  </section>

  <!-- Page Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

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