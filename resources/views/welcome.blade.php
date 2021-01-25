<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>iLand Multipurpose Landing Page Template</title>
<link rel="icon" href="{{asset('favicon.ico')}}" type="image/ico" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="iLand Multipurpose Landing Page Template">
<meta name="keywords" content="iLand HTML Template, iLand Landing Page, Landing Page Template">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
<!-- Resource style -->
<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
<!-- Resource style -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrapper">
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand page-scroll" href="#main"><img src="assets/images/logo.png" width="80" height="30" alt="iLand" /></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a class="page-scroll" href="#main">{{$resultado}}</a></li>
            <li><a class="page-scroll" href="#classes">Servicios</a></li>
            <li><a class="page-scroll" href="#features">¿Quienes somos?</a></li>
            <li><a class="page-scroll" href="#pricing">Precios</a></li>
            <li><a class="page-scroll" href="#contact">Contacto</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid -->
  
  <div class="main app form" id="main"><!-- Main Section-->
    <div class="hero-section">
      <div class="container nopadding">
        <div class="col-md-12">
          <div class="hero-content text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.1s">SALUD PODER Y FELICIDAD</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">Estrategias. </p>
            <a href="#" class="btn btn-action wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">Empezar</a> </div>
        </div>
      </div>
    </div>
    <!-- Classes Section -->
    <div class="pitch text-center" id="classes">
      <div class="container">
        <div class="pitch-intro">
          <h1 class="wow fadeInDown" data-wow-delay="0.2s">TODO ES POSIBLE</h1>
          <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic eos quos 
            amet cum neque ipsa maxime quibusdam voluptate voluptatum vel soluta, autem cumque, 
            qui consequuntur dolorum! Error quae blanditiis quisquam! </p>
        </div>
        <div class="col-md-12">
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-checkmark-outline"></i> </div>
            <div class="pitch-content">
              <h1>Entrenamiento</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptatem consectetur, minima nobis fuga ad, expedita at enim eum quis eaque dolores quos. Repudiandae voluptates corporis doloribus, nulla nihil assumenda.</p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Nutrición</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi enim omnis ducimus sunt incidunt provident autem iure inventore consequuntur vitae, reiciendis neque dolore eligendi corporis, temporibus cumque ipsa! Iste, omnis?</p>
            </div>
          </div>
          <div class="col-md-4 wow fadeInDown" data-wow-delay="0.2s">
            <div class="pitch-icon"> <i class="ion-ios-folder-outline"></i> </div>
            <div class="pitch-content">
              <h1>Estiramiento</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas consectetur officiis inventore eveniet, dolorum iure illum dolore labore blanditiis quis magnam laborum sed error commodi nulla explicabo quae quasi sint.</p>
            </div>
          </div>


          </div>
        </div>
      </div>
    </div>
    <!-- Features Section -->
    <div class="app-features text-center" id="features">
      <div class="container">
        <h1 class="wow fadeInDown" data-wow-delay="0.1s">Me comprometo contigo.</h1>
        <p class="wow fadeInDown" data-wow-delay="0.2s"> Aliquam sagittis ligula et sem lacinia, ut facilisis enim sollicitudin. Proin nisi est,<br class="hidden-xs">
          convallis nec purus vitae, iaculis posuere sapien. </p>
        <div class="col-md-4 features-left text-right">
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.2s">
            <div class="icon"> <i class="ion-ios-list-outline"></i> </div>
            <div class="feature-single">
              <p>Creare un plan que se adapte a ti, con base a tus estrategias nutricionales cotidianas.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.3s">
            <div class="icon"> <i class="ion-ios-speedometer-outline"></i> </div>
            <div class="feature-single">
              <p>Dominación proactiva.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.4s">
            <div class="icon"> <i class="ion-ios-pulse"></i> </div>
            <div class="feature-single">
              <p>Ritmo cardíaco.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-delay="0.5s"> <img class="img-responsive" src="images/iPhone-app.png" alt="App" /> </div>
        <div class="col-md-4 features-left text-left">

          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.7s">
            <div class="icon"> <i class="ion-ios-heart-outline"></i> </div>
            <div class="feature-single">
              <p>Tranquilidad.</p>
            </div>
          </div>
          <div class="col-md-12 wow fadeInDown" data-wow-delay="0.8s">
            <div class="icon"> <i class="ion-ios-analytics-outline"></i> </div>
            <div class="feature-single">
              <p>Salud.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Split Feature1 Section -->
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="assets/images/app_image.png" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Mantén tu cuerpo en forma y obtendras <br>
            calidad de vida.</h1>
          <p class="wow fadeInUp"> Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl, molestie sed egestas bibendum, varius eu diam. Suspendisse est metus, ultrices sit amet dolor in, rhoncus malesuada mi.</p>
          <ul class="wow fadeInUp">
            <li>Nulla ornare purus non consequat ultricies.</li>
            <li>Etiam est nisl, molestie sed egestas bibendum</li>
            <li>Aliquam vel euismod elit, sed suscipit est.</li>
            <li>Curabitur egestas justo neque viverra vel. </li>
          </ul>
        </div>
      </div>
    </div>
     <!-- Split Feature2 Section -->
    <div class="split-features2">
      <div class="col-md-6 nopadding">
        <div class="split-content second">
          <h1 class="wow fadeInUp">Observa los resultados y sientete diferente</h1>
          <p class="wow fadeInUp"> Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl, molestie sed egestas bibendum, varius eu diam. Suspendisse est metus, ultrices sit amet dolor in, rhoncus malesuada mi.</p>
          <ul class="wow fadeInUp">
            <li>Nulla ornare purus non consequat ultricies.</li>
            <li>Etiam est nisl, molestie sed egestas bibendum</li>
            <li>Aliquam vel euismod elit, sed suscipit est.</li>
            <li>Curabitur egestas justo neque viverra vel. </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="assets/images/app_image2.png" alt="Image" /> </div>
      </div>
    </div>
     <!-- Split Feature3 Section -->
    <div class="split-features">
      <div class="col-md-6 nopadding">
        <div class="split-image"> <img class="img-responsive wow fadeIn" src="assets/images/gym-3.jpg" alt="Image" /> </div>
      </div>
      <div class="col-md-6 nopadding">
        <div class="split-content">
          <h1 class="wow fadeInUp">Continua rindiendo.<br>
            Te lo mereces.</h1>
          <p class="wow fadeInUp"> Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl, molestie sed egestas bibendum, varius eu diam. Suspendisse est metus, ultrices sit amet dolor in, rhoncus malesuada mi.</p>
          <ul class="wow fadeInUp">
            <li>Nulla ornare purus non consequat ultricies.</li>
            <li>Etiam est nisl, molestie sed egestas bibendum</li>
            <li>Aliquam vel euismod elit, sed suscipit est.</li>
            <li>Curabitur egestas justo neque viverra vel. </li>
          </ul>
        </div>
      </div>
    </div>
     <!-- Bold call to action Section -->
    <div class="feature-sub">
      <div class="container">
        <div class="sub-inner">
          <h1 class="wow fadeInUp">Si no es personal, ¡no es posible! Cambia tu cuerpo, cambia tu mente, cambia tu actitud.</h1>
          <a href="#" class="btn btn-action wow fadeInUp">Empezar</a> </div>
      </div>
    </div>
     <!-- Client Section -->
    <div class="review-section" id="review">
      <div class="container">
        <div class="col-md-10 col-md-offset-1">
          <div class="reviews owl-carousel owl-theme">
            <div class="review-single"><img class="img-circle" src="assets/images/customer1.png" alt="Client Testimonoal" />
              <div class="review-text wow fadeInUp" data-wow-delay="0.2s">
                <p>Morbi eget dictum enim. Praesent sed quam sit amet lorem tempor rhoncus. <br>
                  In hac habitasse platea dictumst. Vivamus in accumsan ex</p>
                <h3>Juan Carlos Granados</h3>
                <h3>Profesional de la salud y del deporte.</h3>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Package Section -->
    <div id="pricing" class="pricing-section text-center">
      <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
          <div class="pricing-intro">
            <h1 class="wow fadeInUp" data-wow-delay="0s">PAQUETES</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"> Lorem ipsum dolor sit. Incidunt laborum beatae earum nihil odio consequatur officiis <br class="hidden-xs">
              tempore consequuntur officia ducimus unde doloribus quod unt repell </p>
          </div>
          <div class="col-sm-6">
            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
              <div class="pricing-details">
                <h2>Personalizado</h2>
                <span>$60.000</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
                <button class="btn btn-primary btn-action btn-fill">Obtener Plan</button>
                <a href="https://biz.payulatam.com/B0dbf72A60B38B8">
                <img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png">
                </a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
              <div class="pricing-details">
                <h2>Profesionales</h2>
                <span>$100.000</span>
                <ul>
                  <li>Consectetur adipiscing</li>
                  <li>Nunc luctus nulla et tellus</li>
                  <li>Suspendisse quis metus</li>
                  <li>Vestibul varius fermentum erat</li>
                </ul>
                <button class="btn btn-primary btn-action btn-fill">Obtener Plan</button>
                <a href="https://biz.payulatam.com/B0dbf72A60B38B8">
                <img src="http://www.payulatam.com/img-secure-2015/boton_pagar_mediano.png">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Subscribe Form -->
    <div class="cta-sub no-color">
      <div class="container">
        <div class="cta-inner">
          <h1 class="wow fadeInUp" data-wow-delay="0s">Suscríbase a nuestro boletín de noticias y reciba ofertas interesantes</h1>
          <p class="wow fadeInUp" data-wow-delay="0.2s">Ingrese su dirección de correo electrónico<br class="hidden-xs">
          </p>
          <div class="form wow fadeInUp" data-wow-delay="0.3s">
            <form class="subscribe-form center-form wow zoomIn" action="php/subscribe.php" method="post" name="subscribeform" id="subscribeform">
              <input class="mail" type="email" name="email" placeholder="Join the wait list" autocomplete="off" id="subemail">
              <input class="submit-button" type="submit" value="Subscribe" name="send" id="subsubmit">
            </form>
            <!-- subscribe message -->
            <div id="mesaj"></div>
            <!-- subscribe message --> 
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer Section -->
    <div class="footer" id="contact">
      <div class="container">
        <div class="col-md-6 contact">
          <h1>Sobre el entrenador</h1>
          <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <br>
            vel illum dolore eu feugiat nulla facilisis at vero Duis autem vel eum iriure dolor in <br>
            hendrerit in vulputate velit esse eros et accumsan.</p>
          <p>Pellentesque eget dolor gravida, tempus purus ac, ultricies mauris. Etiam est nisl,<br>
            molestie sed egestas bibendum, varius eu diam.</p>
        </div>
        <div class="col-md-3 contact footer-menu">
          <h1>Social</h1>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Github</a></li>
            <li><a href="#">Pinterest</a></li>
            <li><a href="#">Google Plus</a></li>
          </ul>
        </div>
        <div class="col-md-3 contact">
          <h1>Contactanos</h1>
          <p> Contact our 24/7 customer support if you have any questions. We'll help you out. </p>
          <a href="mailto:support@gmail.com">contact@iland.com</a> </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll To Top --> 
  
  <a id="back-top" class="back-to-top page-scroll" href="#main"> <i class="ion-ios-arrow-thin-up"></i> </a> 
  
  <!-- Scroll To Top Ends--> 
  
</div>
<!-- Main Section -->
</div>
<!-- Wrapper--> 

<!-- Jquery and Js Plugins --> 
<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.1.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/menu.js')}}"></script> 
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script> 
<script src="{{asset('assets/js/jquery.subscribe.js')}}"></script>
</body>
</html>