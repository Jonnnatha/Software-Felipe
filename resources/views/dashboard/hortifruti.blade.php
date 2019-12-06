<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bom Dia</title>

    <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-content">
            <h3>Cooking in progress..</h3>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-area">

        <!-- Top Header Area -->

        <div class="top-header-area bg-img bg-overlay" style="background-image: url(img/header.jpg);">
          <div class="logo-area">
              <a href="webapp" ><img src="img/logo-app.png" alt=""></a>
          </div>
        </div>
        <div class="bueno-main-menu" id="sticker"style="visibility:hidden;">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="buenoNav">

                        <!-- Toggler -->
                        <div id="toggler"><a href="webapp"><img src="img/voltar.png" alt=""></a></div>
                      </nav>
  </div>
  </div>
  </div>

    </header>
    <!-- ##### Header Area End ##### -->


    <!-- ##### Treading Post Area End ##### -->


    <!-- ##### Hero Area End ##### -->


    <!-- ##### Catagory Area End ##### -->

    <!-- ##### Big Posts Area Start ##### -->
    <div class="big-posts-area mb-50">
        <div class="container">

            <!-- Single Big Post Area -->

                   <?php
                   foreach ($produto as $lo):
                     $mudatem=  $lo->dataabert;
                     $oferta= $lo->ofertas;
               $mdat = date('d/m/Y', strtotime($mudatem));
               if($oferta == "Hortfruti"){
                       ?>

                     <div class="row align-items-center " >
                         <div class="col-12 col-md-6">
                             <h4 style="color:rgb(18, 46, 61);">Catálogo</h4>
                             <div class="big-post-thumbnail mb-50" style="margin-top:20px;">
                                 <img  style="border-radius: 8px; width: 330px;
               height: 232px;" src="uploads/<?php echo $lo->img; ?>" alt="">
                             </div>
                         </div>
                         <div class="col-12 col-md-6">
                             <div class="big-post-content text-center mb-50">
                                 <a href="#" class="post-tag" style="color:rgb(18, 46, 61);">  <?php echo $lo->nome; ?></a>
                                                                    <a href="#" class="post-title"><?php echo $lo->valor1; ?></a><a href="#" class="post-title" style="font-size:25px; color:red;"> Por  <?php echo $lo->valor2; ?> - <?php echo $lo->analogia; ?></a>
                                 <div class="">
                                 <a href="#" class="" style="color: #7a7a7a;
                                 font-size: 13px;"> Data da publicação: <?php echo $mdat;?> </a>
                                 </div>
                                 <p style="color:rgb(18, 46, 61); margin-top:10px;"><?php echo $lo->descricao; ?>.</p>
                             </div>
                         </div>
                     </div>
                     <?php
                   }
                   endforeach;
                          ?>
            <!-- Single Big Post Area -->

        </div>
    </div>
    <!-- ##### Big Posts Area End ##### -->




    <!-- ##### Instagram Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-5">
                    <!-- Copywrite Text -->
                    <p class="copywrite-text" style="text-align:center;"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos direitos reservados | Feito com mão e com <i class="fa fa-heart-o" aria-hidden="true"></i>.<a href="https://colorlib.com" target="_blank">Supermercado</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->

    <script src="js/active.js"></script>
    <script>
    $(function(){

        var jElement = $('.bueno-main-menu');

        $(window).scroll(function(){
            if ( $(this).scrollTop() > 110 ){
                jElement.css({
                'visibility':'visible'
                });
            }else{
                jElement.css({
                  'visibility':'hidden'
                });
            }
        });

    });
    </script>

</body>

</html>
