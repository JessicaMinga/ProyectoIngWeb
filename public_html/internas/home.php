<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/slider.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <script src="../js/jquery-1.7.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/tms-0.4.1.js"></script>
    <script>
    $(document).ready(function(){           
      $('.slider')._TMS({
        show:0,
        pauseOnHover:true,
        prevBu:'.prev',
        nextBu:'.next',
        playBu:false,
        duration:10000,
        preset:'zoomer',
        pagination:false,
        pagNums:false,
        slideshow:700000,
        numStatus:false,
        banners:false,
        waitBannerAnimation:true,
        progressBar:false
      })    
    });
  </script>
  <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5.js"></script>
      <link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
  <![endif]-->
</head>
<body>
<div class="main">
   <header>                     
      <nav >  
        <ul class="menu">
              <li class="current"><a href="home.php">Home</a></li>
              <li><a href="Lugares.php">Lugares Turisticos</a></li>
              <li><a href="busquedas.php">Búsquedas</a></li>
              <li><a href="rutas.php">Rutas</a></li>
              <li><a href="contactos.php">Contactos</a></li>
              <li><a href="login.php">Login</a></li>
              
          </ul>
      </nav>
      
      <div class="slogan">Maintaining areas harmonious with <span>the natural environment</span></div>
    </header>  
    <div id="slide">
       <div class="slider">
          <ul class="items">
              <li><img src="../images/ecuador2.jpg" alt="" /></li>
              <li><img src="../images/ecuador3.jpg" alt="" /></li>
              <li><img src="../images/ecuador2.jpg" alt="" /></li>
              
          </ul>
       </div>
       <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
    </div>
  <!--==============================content================================-->
     <section id="content"><div class="ic"></div>
      <div class="container_24">
            <div class="grid_5 prefix_1">
              <div class="text-1"><span>01.</span><strong>Región <br>Costa</strong></div>
                <div class="img-border"><img width="190em" height="90em" src="../images/costa.jpg" alt="" class="pq"></div>
                <p class="clr-1 it bold top-1">Litoral</p>
                <p class="it p-border">La costa ecuatoriana tiene hermosas playas de aguas cálidas todo el año, es la tierra de los manglares más altos del mundo, sin olvidar los grandes parques y reservas como: Machalilla, Manglares - Churute, Cotacachi - Cayapas entre otras.</p>
                <a href="#" class="link-1">Read more</a>
            </div>  
            <div class="grid_5 prefix_1">
              <div class="text-1"><span>02.</span><strong>Región <br>Sierra</strong></div>
                <div class="img-border"  ><img width="190em" height="90em" src="../images/Sierra.jpg" alt="" class="pq"></div>
                <p class="clr-1 it bold top-1">Interandina</p>
                <p class="it p-border">La región Sierra Centro de nuestro país le invita a conocer la Provincia de
                                Cotopaxi; un lugar maravilloso, de hermosos paisajes y de los más diversos
                                atractivos turísticos, lleno de bondades y virtudes que se pueden ofrecer al
                                turista nacional e internacional. </p>
                <a href="#" class="link-1">Read more</a>
            </div> 
            <div class="grid_5 prefix_1">
              <div class="text-1"><span>03.</span><strong>Región <br>Oriental</strong></div>
                <div class="img-border"><img width="190em" height="90em" src="../images/oriente.jpg" alt="" class="pq"></div>
                <p class="clr-1 it bold top-1">Amazónica</p>
                <p class="it p-border">La región de Amazonica, es el mundo mas grande de selva tropical, donde fluye más de un tercio del agua dulce de la tierra, anfitriones del mundo por poseer una diversidad biológica enorme y muchas especies únicas. En el primer vistazo, la selva tropical es un lugar extenso húmedo y verde</p>
                <a href="#" class="link-1">Read more</a>
            </div>  
            <div class="grid_5 prefix_1">
              <div class="text-1"><span>04.</span><strong>Región <br>Insular</strong></div>
                <div class="img-border"><img src="../images/galapagos.jpg" width="190em" height="90em" alt="" class="pq"></div>
                <p class="clr-1 it bold top-1">Insular</p>
                <p class="it p-border">Las islas Galápagos son famosas por sus numerosas especies endémicas y por los estudios de Charles Darwin que le llevaron a establecer su Teoría de la Evolución por la selección natural.</p>
                <a href="#" class="link-1">Read more</a>
            </div> 
           <div class="grid_23 prefix_1">
              <div class="block-1 top-2">
                  <div>
                      <div>
                          <div class="text-2">Ven y disfruta de las maravillas de este hermoso país<span>
                          ECUADOR TE ESPERA!</span></div>
                            
                            <div class="text-3">No lo olvides <span>Ecuador &amp; País Turístico</span></div>
                            <a href="#" class="link-2">click here</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid_15 prefix_1">
              <h2 class="h2 top-3">Bienvenidos!</h2>
                <p class="p-border bold top-4">Turismo<a href="http://www.turismo.gob.ec/" class="link" target="_blank">Aquí</a> Ecuador posee innumerables zonas de gran atractivo turístico que se destacan por su  variada cultura y gran biodiversidad, sus calidas playas, su exelente gastronomia en las 4 regiones de nuestro país se pueden encontrar con exelentes atractivos turistico. <a href="http://www.turismo.gob.ec/" class="link"></a> </p>
                <div class="wrap p-border top-5">
                  <div class="letter">
                      <span>C.</span>
                      <p class="extra-wrap clr-1"></p>
                    </div>
                    <div class="letter">
                      <span>S.</span>
                      <p class="extra-wrap clr-1"> </p>
                    </div>
                    <div class="letter last">
                      <span>O.</span>
                      <p class="extra-wrap clr-1">  </p>
                    </div>
                </div>
                <a href="http://www.ecuadorexplorer.com/es/html/regiones-de-ecuador.html" class="link-1">Leer mas</a>
            </div>
            <div class="grid_6 prefix_2">
              <h3 class="h3 top-6">Lo que Posee</h3>
                <ul class="list-1 top-7">
                  <li><a href="#">Parques</a></li>
                    <li><a href="#">Reservas </a></li>
                    <li><a href="#">Iglesias</a></li>
                    <li><a href="#">Cementerios </a></li>
                    <li><a href="#">Monumentos</a></li>
                    <li><a href="#">Teatros</a></li>
                    <li><a href="#">Museos &amp; más</a></li>
              
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </section> 

<!--==============================footer=================================-->
 <?php 
    include("footer.php");
  ?>
</body>
</html>