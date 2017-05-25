<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contactos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_24.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
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
   <div class="sub-pages">
   	<div>
       <header>                   	
          <?php 
            include("header.php");
           ?>
          
           <div class="slogan">ECUADOR PARAÍSO TURÍSTICO  TODO LO MEJOR DE ECUADOR <span> VEN Y CONÓCELO</span></div>
        </header>  
      </div>
    </div>
  <!--==============================content================================-->
    <section id="content"><div class="ic"></div>
    	<div class="container_24">
            <div class="grid_23 prefix_1">
            	<div class="block-1">
                	<div>
                    	<div>
                        	<div class="text-2">We can help your wishes turn <span>to a stylish project!</span></div>
                            <div class="discount"></div>
                            <div class="text-3">Only this month on <span>Patios &amp; raised patios</span></div>
                            <a href="#" class="link-2">click here</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid_6 prefix_1">
            	<h3 class="h3 top-6">Contact info:</h3>
                <dl class="adr">
                    <dt class="clr-1"><strong>Exterior design</strong></dt>
                    <dd class="top-13">8901 Marmora Road, Glasgow, D04 89GR</dd>
                    <dd class="top-13"><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd class="p2"><span>Email:</span><a href="#" class="link">mail@thomsander.com</a></dd>
                    <dd>9863 Mill Road, Cambridge, MG09 99HT</dd>
                    <dd class="top-13"><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd><span>Email:</span><a href="#" class="link">mail@thomsander.com</a></dd>
                </dl> 
            </div>
            <div class="grid_16 prefix_1">
            	<h2 class="h2 top-3">Contact form:</h2>
                <form id="form" method="post" >
                    <fieldset>
                      <label><strong>Full name:</strong><input type="text" value=""><strong class="clear"></strong></label>
                      <label><strong>Email:</strong><input type="text" value=""><strong class="clear"></strong></label>
                      <label><strong>Message:</strong><textarea></textarea><strong class="clear"></strong></label>
                      <div class="btns"><a href="#" class="link-1" onClick="document.getElementById('form').submit()">Send</a><a href="#" class="link-1">Clear</a></div>
                    </fieldset>  
                  </form> 
            </div>
            <div class="clear"></div>
        </div>
    </section> 
</div>
<!--==============================footer=================================-->
  
</body>
<?php 
    include("footer.php");
   ?>
</html>