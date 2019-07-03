<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <!-- Head -->
  <!-- Superslides -->
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">

  <?php include 'assets/inc/head.php' ?>

  <title>RS Informática</title>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Header -->
    <?php include 'assets/inc/header.php' ?>
    <img src="assets/img/bg-header-contato.jpg" alt="" class="bg-internas">


    <!-- Nossas Soluções -->
    <section id="solucoes">
      <div id="nossas-solucoes">
        <div class="container text-center">
          <span class="line-blue"></span>
          <header>
            <h1>Fale<b> Conosco</b></h1>
            <h2>Preencha o formulário abaixo para solicitar orçamento, solicitar suporte, esclarecer dúvidas, enviar críticas, elogios ou sugestões. Se preferir, envie um e-mail diretamente para contato@rsinformaticape.com.br ou ligue para um nosso telefone: (81) 3636-2859. Também temos WhatsApp: <a href="tel:81985014999">(81) 98501-4999</a> / <a href="tel:81995705775">(81) 99570-5775.</a></h2>
          </header>
          <span class="line-gray"></span>
        </div>
        <div class="container-fluid no-margin text-center">
          <section id="fale-conosco">
            <div class="container">
              <br>
              <br>
              <form action="" method="POST" class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <input type="text" name="nome" placeholder="Nome" class="form-control">
                  <input type="text" name="email" placeholder="Email" class="form-control">
                  <input type="text" name="telefone" placeholder="Telefone" class="form-control">
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                  <textarea class="form-control" name="mensagem" placeholder="Mensagem"></textarea>
                  <!-- <input type="text" placeholder="Mensagem" class="form-control"> -->
                </div>

                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12  text-left">
                    <button type="submit" class="btn">enviar</button>
                  </div>
                </div><!-- /.row -->
              </form>
            </div><!-- /.container -->
          </section><!-- /#faleconosco -->
        </div><!-- /.container-fluid -->
      </div><!-- /#nossas-solucoes -->
    </section><!-- /Nossas Soluções -->

    <!-- Footer -->
    <?php include 'assets/inc/footer.php' ?>

    <!-- Js -->
    <?php include 'assets/inc/js.php' ?>


  </body>
  </html>