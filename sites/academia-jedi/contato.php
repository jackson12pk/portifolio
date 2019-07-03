<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Fale Conosco | Academia Jedi</title>
  
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
        <header><h1>contato</h1></header>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d587.2372169506201!2d-34.89644674078079!3d-8.055970596798684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab18dd4598e253%3A0x58ce8bf6387f2727!2sAv.+Governador+Carlos+de+Lima+Cavalcanti%2C+100+-+Boa+Vista%2C+Recife+-+PE!5e0!3m2!1spt-BR!2sbr!4v1512067360281" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div><!-- /.row -->

      <div class="row">
        <div class="col-md-6 col-md-offset-1 formulario">
          <form name="contato" autocomplete="off" method="post" action="">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Nome" required="required" name="nome" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" placeholder="Email" required="required" name="email" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Telefone" required="required" name="telefone" class="form-control">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" placeholder="Assunto" required="required" name="assunto" class="form-control">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea placeholder="Mensagem" name="mensagem" required="required" class="form-control" rows="5"></textarea>
              </div>
            </div>
          
          <div class="col-md-12">
            <input type="submit" value="Enviar" class="btn-enviar">
          </div>
        </div>
        </form>

        <div class="col-md-4">
          <div class="contato">
            <div class="fone"><a href="tel:81982078057">(81) 9 8207-8057</a></div>
            <div class="email">contato@academiajedi.com.br</div>
            <address>
              <div class="endereco">
                Av. Governador Carlos de Lima Cavalcanti, 100<br>
                Boa Vista, Recife - PE - 50070-110
              </div>
            </address>
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