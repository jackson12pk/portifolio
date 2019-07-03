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

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <header><h2>Fale Conosco</h2></header>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos atque modi mollitia, sequi, officiis rerum repellat quae fugit dolore tenetur ea perspiciatis illum corporis ratione itaque commodi recusandae, incidunt ullam.
              </p>
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
          <div class="row">

            <form class="form-group" id="form-localizacao" action="" method="POST" >

              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
              </div>
              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="email" placeholder="Email" required/>
              </div>

              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
              </div>
              <div class="col-md-6 col-sm-6">
                <input type="text" class="form-control" name="assunto" placeholder="Assunto" required/>
              </div>
              <div class="col-md-12 col-sm-12">
                <textarea rows="5" placeholder="Mensagem" name="msg" class="form-control" required></textarea>
              </div>
              <div class="col-md-12 col-sm-12">
                
                  <button id="btnSubmit" class="btn btn-default" type="submit" style="background-color: 064831; width: 200px;height: 40px; color: #fff;">Enviar Mensagem</button>
                
              </div>
            </form>

          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>

      <!-- Footer -->
      <?php include "assets/inc/footer.php" ?>

      <!-- Js -->
      <?php include "assets/inc/js.php" ?>
      
    </body>
    </html>