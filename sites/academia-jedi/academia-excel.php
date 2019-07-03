<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia Excel | Academia Jedi</title>

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
        <a href="academias"><header><h1 class="voltar-interna">voltar às academias</h1></header></a>
      </div><!-- /.titulo-internas -->

      <div class="col-md-11 col-md-offset-1 titulo-academia">
        <figure>
          <img src="assets/img/excel2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>excel</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
              Profissionais em diferentes funções, em qualquer área de atuação, podem se beneficiar das facilidades do Excel. Toda área com recursos a serem gerenciados, sejam eles materiais ou não, tem no Excel um grande aliado.

              Você pode aplicar o programa para fazer controles, relatórios, gráficos, tabelas, listas, cronogramas… Com o conhecimento adequado, as possibilidades de uso do Excel são infinitas.

              Importante ressaltar: o Excel pode trabalhar com dados próprios ou vindos de sistemas externos das empresas, como Oracle, SQL Server e SAP. Basta exportar a base de dados em Excel.
            </p>
            <p>
              Durante o curso você vai aprender: Funções matemáticas, estatísticas, de informação e de datas: CONT.SE, CONT.SES, SOMASE, SOMASES, MÉDIASE, MÉDIASES, CONTAR.VAZIO, CONT.NUM, CONT.VALORES, E, OU, SE; formatação de datas; cálculo de horas com formatação condicional. Funções de pesquisa: CORRESP, ÍNDICE, SEERRO; auditoria de fórmulas. Funções de texto; cópia de fórmulas e planilhas.
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  06/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="data-conclusao">
                  03/02/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  08h30 - 12:30 (Sábados)
                </div>
              </div>

              <div class="col-md-6 mg-bt">
                <div class="requisitos">
                  Possuir computador
                </div>
              </div>

            </div><!-- /.panel-body -->
            <div class="panel-footer">

              <div class="valor-academia">
                <div class="valor">R$ 400,00</div><!-- /.valor -->
                <a href="https://pag.ae/bjrBltr"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-excel-academia-jedi-1.jpg" alt="Turma de Excel da Academia Jedi" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="assets/img/turma-excel-academia-jedi-2.png" alt="Turma de Excel da Academia Jedi" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/kenobi.png" alt="" class="img-responsive">
              <div class="nome">Prof. Ciro Meira Lins</div>
              <div class="texto-comentario">
                <p>Coordenador de Planejamento na CSU Card System com mais de 10 anos de experiência em desenvolvimento e automatização de relatórios com Excel.</p>
              </div>
            </div>
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