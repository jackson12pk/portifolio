<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Academia ITIL | Academia Jedi</title>
  
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
          <img src="assets/img/ccna2.png" alt="" class="img-responsive">
          <figcaption><span>Academia</span><h1>ccna</h1></figcaption>
        </figure>
      </div><!-- /.titulo-academia -->


      <div class="row mg-bt">
        <div class="col-md-6 col-md-offset-1">
          <div class="desc-academia">
            <p>
            O curso tem como objetivo preparar o aluno para realizar o exame de certificação oficial ITIL Foundation, este curso apresentará conceitos, funções e processos do ciclo de vida do serviço.
            </p>
            <p>
            O curso ensinará ao aluno as boas práticas para o melhor gerenciamento dos serviços de TI, abordando todo o ciclo de vida de serviços do ITIL.
Ao final do curso o aluno terá aprendido conceitos utilizados no gerenciamento da TI, terá conhecido os estágios e processos do ciclo de vida do ITIL, poderá identificar relacionamentos entre os componentes e os fatores que afetam a eficiência do uso das boas práticas para os serviços de TI.
            </p>
            <p>
            Conteúdos Programáticos:
            •	Introdução - Fundamentos do ITIL V3
            •	Gerenciamento de Serviço como uma Prática
            •	Estratégia de Serviço
            •	Desenho de Serviço
            •	Transição de Serviço
            •	Operação de Serviço
            •	Melhoria continuada de serviço
            •	Simulados & Dicas 
            </p>
          </div><!-- /.desc-academia -->
        </div>

        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">

              <div class="col-md-6 mg-bt">
                <div class="data-inicio">
                  08/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="data-conclusao">
                  19/01/18
                </div>
              </div>  

              <div class="col-md-6 mg-bt">
                <div class="horario">
                  19:00 - 22:00 (Seg a Sex)
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
                <div class="valor">R$ 700,00</div><!-- /.valor -->
                <a href="https://pag.ae/bjrHB4x"><img src="assets/img/pagseguro.png" alt="" class="img-responsive"></a>
              </div><!-- /.valor-academia -->

            </div><!-- /.panel-footer -->
          </div><!-- /.panel -->
        </div>
      </div><!-- /.row -->
      
      <div class="row">
        <div class="col-md-6 col-md-offset-1">
          <div class="turmas">
            <h2>turmas anteriores</h2>
            <div class="col-md-6 img-turma"><img src="http://placehold.it/240x240" alt="" class="img-responsive"></div>
            <div class="col-md-6 img-turma"><img src="http://placehold.it/240x240" alt="" class="img-responsive"></div>
          </div><!-- /.turmas -->
        </div>

        <div class="col-md-4">
          <div class="panel comentario text-center">
            <div class="panel-body">
              <img src="assets/img/leia.png" alt="" class="img-responsive">
              <div class="nome">Prof. Beatriz Santos</div>
              <div class="texto-comentario">
                <p>Pós-graduada em Redes de Computadores e Telecomunicações – Tecnologias Convergentes pela Estácio, Graduada em redes de computadores pela Unibratec. Profissional da área de TI com 4 anos de experiência, atualmente trabalhando no projeto PE CONECTADO através da Vectra Consultoria e Serviços, responsável pelo gerenciamento de redes convergentes do Governo do Estado; atuando na integração de serviços de telecomunicações utilizando tecnologia Siemens e Cisco. Certificada em ITIL®, ISO/IEC 20.000 E ISO/IEC 27002.</p>
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