<?php
if(isset($_POST['cod_coleira'])){
	$cod_coleira   = $_POST['cod_coleira'];
	$cor = $_POST['cor'];	
	$raca = $_POST['raca'];
}else{
	$cod_coleira   = '';
	$cor = '';	
	$raca = '';		
}

?>


<html>

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	</head>

  
 <style>
 
 
 
 
body{ 
background-image: url(imagens/fundo1.png); 
background-attachment: fixed;
background-repeat: no-repeat; 
} 


label{
	margin-top: 0px;
	margin-left:0px;
	width : 800px;
	color: #FFFFFF;
	font-weight: bold;
}



teste{
	margin-top: 0px;
	margin-left:0px;
	position : absolute;

}

mechama{
	margin-top: 300px;
	margin-left:0px;
}


#mae3{
	margin-top: -400px;
	margin-left:720px;
	position : relative;
	
}




bloco7{
	margin-top:-400px;
	margin-left: 540px;
	position : absolute;
	width : 375px;
 }

 
.slider {
   margin-top:0px;
	margin-left:-40px;
}


.img1 {
   margin-top:-20px;
	margin-left: 0px;
}

.img2 {
   margin-top:10px;
   margin-left: -200px;
   position: absolute;
}

.img3 {
   margin-top:-300px;
   margin-left: 550px;
   position: absolute;
}

.img4 {
   margin-top:-300px;
	margin-left: 120px;
	position: absolute;
}


#mae1{
	margin-top: 340px;
	margin-left:0px;
	position : absolute;
	
}


.img5 {
    margin-top:0px;
	margin-left: 440px;
	position : absolute;
	height: 130px;
}


</style>
 
 
</head>

<body >


<div class="container">
<div class="row">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
	  <ul class="nav navbar-nav">
	  <li><img src = "imagens/logou.png" width = 150 height = 50></li>
	  <li><a href="#">Home</a></li>
      <li><a href="animais_perdidos.php">Animais perdidos</a></li>
	 <li><a href="Depoimentos.php">Depoimentos</a></li> 
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="testes_geral.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login_wa.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
</div>


<div id="test">
<div class="container">
<div class="row">
 <nav class="col-sm-offset-0">
 <div class="img1">
<img src="imagens/img2.png" class="img-responsive" alt="Cinque Terre"  width="1180" height="236">
</div>
</nav>
</div>
</div>
</div>




<div class="container">
<div class="row">
<div class="col-sm-4">
<form action="listanimal.php" method="GET">
	 <nav class="col-xs-2">
	
	<div class="form-group">
            <label>Cor:</label>
            <input type="text" name="cor" value="">
	</div>
	
	<div class="form-group">
             <label width="300">Codigo da Coleira:</label>
            <input type="text" name="cod_coleira" value="">
	</div>
	
	<div class="form-group">
			<label></label>
           <input type="hidden" name="raca" value="">
	</div>
	
	<br> <button type="submit" class="btn btn-success">Pesquisar</button>
	
	</nav>
</form>
</div>


	
<div class="col-xs-8">

	
  <div class="slider">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index.html</title>
</head>
 <body>

    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                    //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2,                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssor_sliderb = new $JssorSlider$("sliderb_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_sliderb.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_sliderb.$ScaleWidth(Math.min(parentWidth, 600));
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
    <div id="sliderb_container" style="position: absolute; top: 10px; left: -155px; width: 600px;
        height: 300px; overflow: hidden;">
		

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=1000); opacity:0.7; position: absolute; display: block;
                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
			
            <div style="position: absolute; display: block; background: url(img.banner/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
         <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
            overflow: hidden;">
            <div> 
				<a href = "noticia.html"><img u=image src="imagens/pe1.png"  width = 330 height = 184></a>
				
                <div style= "position: absolute; width: 480px; height: 120px; top: 270px; left: 100px; padding: 10px;
                    text-align: left; line-height: 0px; text-transform: uppercase; font-size: 22px;
                        color: #ffffff;"></div>
            </div>
			
			
            <div>
				<a href = "noticia.html"><img u=image src="imagens/pe2.png"  width = 330 height = 184></a>
                <div style= "position: absolute; width: 480px; height: 120px; top: 275px; left: 100px; padding: 10px;
                    text-align: left; line-height: 0px; text-transform: uppercase; font-size: 22px;
                        color: #ffffff;"></div>
            </div>
			
            <div>
				<a href = "noticia.html"><img u=image src="imagens/pe3.png"  width = 330 height = 184></a>
				
                <div style= "position: absolute; width: 480px; height: 120px; top: 270px; left: 100px; padding: 10px;
                    text-align: left; line-height: 0px; text-transform: uppercase; font-size: 22px;
                        color: #ffffff;"></div>
            </div>
			
			
       
			
        </div>
        
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <!-- thumbnail navigator container -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        


		<div u="thumbnavigator" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <!-- Thumbnail Item Skin Begin -->
            <div u="slides">
                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 50; LEFT: 280px;">
                    <div u="thumbnailtemplate" style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 50; LEFT: 280; color:#ffffff; line-height: 45px; font-size:20px; padding-left:10px;"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!--#endregion ThumbnailNavigator Skin End -->
        
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 01 css */
            /*
            .jssorb01 div           (normal)
            .jssorb01 div:hover     (normal mouseover)
            .jssorb01 .av           (active)
            .jssorb01 .av:hover     (active mouseover)
            .jssorb01 .dn           (mousedown)
            */
            .jssorb01 {
                position: absolute;
            }
            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 12px;
                height: 12px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }
            .jssorb01 div { background-color: gray; }
            .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
            .jssorb01 .av { background-color: #fff; }
            .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb01" style="bottom: 16px; right: 10px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(img.banner/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora05l" style=" top: 220px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora05r" style=" top: 220px; right: 8px">
        </span>
        <a style="display: none" href="http://www.jssor.com">Bootstrap Slider</a>
        <!-- Trigger -->
    </div>
    <!-- Jssor Slider End -->
	
	

</div>	

</div>

<div class="col-sm-8">
	<div class="img5">
		<img src="imagens/compre.png" class="img-responsive"  width="500" height="130">
	</div>



</div>
</div>
</div>

<div id="mae1">
<div class="container">
<div class="row">
   <div class=="col-sm-4">
	<div class="img4">
		<img src="imagens/funcio.png" class="img-responsive"  width="600" height="236">
	</div>
	
</div>

   <div class="col-sm-8">
	<div class="img3">
		<img src="imagens/viaja.jpg" class="img-responsive"   width="515" height="100">
	</div>

	</div>
</div>
</div>
</div>
</div>
</div>









</div>


























</body>	

</html>