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

  <section class="contato">
    <div class="wrapper text-center wcont">
      <header><h1><img src="assets/img/contato-title.png" alt=""> contato</h1></header>
      <div class="container">
        <div class="contato-form">
          <form action="" method="POST" class="">
            <div class="col-md-6">
              <div class="form-group">
                <input id="nome" name="nome" type="text" class="form-control transitions" placeholder="Nome" required>
                <input id="home" name="home" type="hidden" value="2">
              </div>
              <div class="form-group">
                <input id="telefone" name="telefone" type="text" class="form-control transitions"  placeholder="Telefone" maxlength="15" minlength="14" required>
              </div>
              <div class="form-group">
                <input id="email" name="email"  type="email" class="form-control transitions" placeholder="E-mail" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea id="msg" name="msg" type="text" class="form-control transitions" rows="8" placeholder="Mensagem" required></textarea>
              </div>
            </div>

            <div class="col-md-12 text-left">
              <input type="submit" value="enviar" class="btn-enviar transitions">
            </div>
          </form>
        </div><!-- /.contato-form -->
      </div><!-- /.container -->
    </div><!-- /.wrapper -->
  </section>


  <!-- Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>

  <script src="assets/js/mask.js"></script>

</body>
</html>