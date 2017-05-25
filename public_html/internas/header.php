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
        pagination:false,ss
        pagNums:false,
        slideshow:700000,
        numStatus:false,
        banners:false,
        waitBannerAnimation:true,
        progressBar:false
      })    
    });
  </script>
	
</head>

 <header>                   	
    <?php 
      include("nav.php");
    ?>  
      <h1><a href="index.html"></a></h1> 
      <div class="slogan">ECUADOR PARAÍSO TURÍSTICO  TODO LO MEJOR DE ECUADOR <span> VEN Y CONÓCELO</span></div>
    </header>  
    <div id="slide">
       <div class="slider">
          <ul class="items">
              <li><img src="../images/ecuador3.jpg" alt="" /></li>
              <li><img src="../images/ecuador2.jpg" alt="" /></li>
              <li><img src="../images/ecuador3.jpg" alt="" /></li>
          </ul>
       </div>
       <a href="#" class="prev">&nbsp;</a><a href="#" class="next">&nbsp;</a>
    </div>