<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Home Market - Um novo conceito de compras</title>

  <!-- Favicon -->
  <?php include 'assets/inc/favicon.php' ?>

  <!-- Page Css -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <?php include 'assets/inc/head.php' ?>

</head>
<body>

  <!-- Header -->
  <?php include 'assets/inc/header.php' ?>
  

  <section id="home" class="banner">
    <img src="assets/img/phone-app.png" alt="">
  </section><!-- /.banner -->

  <section id="vantagens">
    <div class="container">
      <header><h1>Vantagens</h1></header>
      <div class="row">
        <div class="col-md-7">
          <p></p>
        </div>
      </div><!-- /.row -->
      <div class="vantagens-item">
        <div class="col-md-offset-2 col-md-3"><h2 class="number1">Conveniente</h2><p>Nossos produtos estarão disponíveis no momento em que você mais precisa deles. Dessa forma nunca foi tão fácil comprar!</p></div>
        <div class="col-md-3"><h2 class="number2">Fácil</h2><p>Nosso aplicativo foi desenvolvido para facilitar sua vida, a compra pode ser feita com apenas 2 clicks.</p></div>
        <div class="col-md-3"><h2 class="number3">Seguro</h2><p>Todos nossos itens estarão disponíveis sem que você precise sair de casa. Além disso, todos os seus dados são guardados à sete chaves.</p></div>
      </div>
    </div><!-- /.container -->
  </section><!-- /.vantagens -->

  <section id="sobre">
    <div class="container">
      <header><span>Conheça o</span><h1>Home Market</h1></header>
      <div class="col-md-12 historia">
        <div class="col-md-offset-1 col-md-2 text-center">
          <img src="assets/img/historia.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-5 texto-sobre">
          <header><h2>Nossa História</h2></header>
          <p>Começamos nossa jornada em 2017 com o intuito de montar um produto que proporcionasse aos nossos clientes praticidade, comodidade e disponibilidade 24h. Nesse cenário surgiu o Home Market, que propõe mudar a forma como você compra.</p>
        </div>
      </div><!-- /.col-md-12 -->
      <div class="col-md-12 missao">
        <div class="col-md-offset-1 col-md-2 text-center">
          <img src="assets/img/missao.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-5 texto-sobre">
          <header><h2>Nossa Missão</h2></header>
          <p>Ter uma relação de confiança com nossos consumidores, garantindo sempre a transparência nas relações.</p>
          <p>Ter uma conduta ética nas ações e decisões, priorizando o senso de justiça.</p>
          <p>Construir relacionamentos sólidos e duradouros, sempre buscando a satisfação dos nossos clientes, parceiros e da nossa empresa.</p>
        </div>
      </div><!-- /.col-md-12 -->
      <div class="col-md-12 tecnologia">
        <div class="col-md-offset-1 col-md-2 text-center">
          <img src="assets/img/tecnologia.png" alt="" class="img-responsive">
        </div>
        <div class="col-md-5 texto-sobre">
          <header><h2>Tecnologia</h2></header>
          <p>Nosso aplicativo fornece uma compra rápida e segura, tornando o hábito de comprar pela internet uma rotina na sua casa.</p>
        </div>
      </div><!-- /.col-md-12 -->
    </div><!-- /.container -->
  </section><!-- /#sobre -->

  <section id="contato">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <header><span>Quero o</span><h1>Home Market</h1></header>
          <div class="soft-open col-md-8">
            <p><b>Soft open!</b></p>
            <p>Caso esteja interessado em ter o Home Market, preencha os campos que nossa equipe entrará em contato.</p>
          </div><!-- /.soft-open -->
        </div>
        <div class="col-md-8">
          <form action="" method="post">
            <div class="row">
              <div class="form-group col-md-7"><input type="text" class="form-control" placeholder="Nome" name="nome" required></div>
              <div class="form-group col-md-5"><input type="tel" class="form-control" placeholder="Telefone" name="telefone" required></div>
              <div class="form-group col-md-6"><input type="email" class="form-control" placeholder="Email" name="email" required></div>
              <div class="form-group col-md-6"><input type="text" class="form-control" placeholder="Endereço" name="endereco" required></div>
              <div class="form-group col-md-12"><textarea type="text" class="form-control" placeholder="Mensagem" rows="5" name="mensagem" required></textarea></div>
            </div>
            <input type="submit" value="Enviar" class="btn-enviar">
          </form>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.contato -->


  <!-- Footer -->
  <?php include 'assets/inc/footer.php' ?>

  <!-- Page Js -->
  <?php include 'assets/inc/js.php' ?>
  <script src="assets/js/scroll.js"></script>

</body>
</html>