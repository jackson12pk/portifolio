<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Casa das Pipas - Produtos</title>

  <!-- Favicon -->
  <?php include 'assets/inc/favicon.php' ?>

  <!-- Page Css -->
  <?php include 'assets/inc/head.php' ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

</head>
<body>

  <!-- Header -->
  <?php include 'assets/inc/header.php' ?>

  <div class="wrapper text-center">
    <header><h1><img src="assets/img/pipa-title.png" alt="">Produtos</h1></header>
    
    <section class="produtos">
      <div class="container content-produtos no-pad fix-pad">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <ul class="simplefilter bold uppercase">
              <li class="active" data-filter="all" class="transitions">Tudo</li>


              
              <li data-filter="2" class="transitions">Pipas</li>
              <li data-filter="3" class="transitions">Linhas</li>
              <li data-filter="4" class="transitions">Formas</li>
              <li data-filter="5" class="transitions">Carretilhas</li>


            </ul><!-- /.simplefilter -->
          </div>
        </div><!-- /.row -->

        <div class="filtr-container">      

          <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" data-category="2">
            <div class="item transitions">
              <figure><img src="assets/img/pipa.png" alt="" class="img-responsive"></figure>
              <div class="desc-item"><p>Pipa</p>
                <p class="preco-produto">R$ 9,99</p>
                <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
              </div>
            </div><!-- /.item -->
          </div>

          <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" data-category="3">
            <div class="item transitions">
              <figure><img src="assets/img/linha.png" alt="" class="img-responsive"></figure>
              <div class="desc-item"><p>Linha</p>
                <p class="preco-produto">R$ 9,99</p>
                <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
              </div>
            </div><!-- /.item -->
          </div>

          <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" data-category="4">
            <div class="item transitions">
              <figure><img src="assets/img/forma.png" alt="" class="img-responsive"></figure>
              <div class="desc-item"><p>forma</p>
                <p class="preco-produto">R$ 9,99</p>
                <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
              </div>
            </div><!-- /.item -->
          </div>
          
          <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" data-category="5">
            <div class="item transitions">
              <figure><img src="assets/img/Carretilha.png" alt="" class="img-responsive"></figure>
              <div class="desc-item"><p>Carretilha</p>
                <p class="preco-produto">R$ 9,99</p>
                <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
              </div>
            </div><!-- /.item -->
          </div>

        </div><!-- /.filtr-container -->
      </div><!-- /.container -->

      <div class="paginacao text-center">
        <ul class="pagination">

          <li><a href=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>
          <li><a href="">1</a></li>
          <li><a class="active" href="">2</a></li>
          <li><a href="">3</a></li>
          <li><a href="">4</a></li>
          <li><a href=""><i class="glyphicon glyphicon-chevron-right"></i></a></li>

        </ul>
      </div--><!-- /.button-mais 
    </section><!-- /.produtos -->

  </div><!-- /.wrapper -->

  <!-- Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

  <!-- ScrollReveal -->
  <!-- <script src="assets/plugins/scrollreveal/scrollreveal.min.js"></script> -->
  
  <!-- Filterizr -->
  <script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
  <script src="assets/js/controls.js"></script>
  

  <!-- Filterizr -->
  <script type="text/javascript">
    $(window).on('load', function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
          });
        </script>

      </body>
      </html>