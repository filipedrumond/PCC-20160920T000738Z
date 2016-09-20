<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

<link rel="stylesheet" type="text/css" media="all" href="css/estilo.css" />


<style>

#mae{margin-top:30px;margin-left:660px; position : absolute;}
.botao {background:#000000;color: #ffffff;border:8px solid #ffffff; style= width: 300px; height: 50px}

.texto1{color: #00008B; font-size: 13px; font-family: arial; font-weight: bold;}
.texto2{color: #000000; font-size: 20px; font-family: arial; font-weight: bold;}
.texto3{color: #000000; font-size: 12px; font-family: arial; font-weight: bold;}

#mae2{margin-top:140px;margin-left:200px; position : absolute;}
#bloco3{margin-top:40px;margin-left: 20px; position : absolute; width : 162px;} 
#bloco4{margin-top:40px;margin-left: 275px; position : absolute; width : 375px;}
#bloco5{margin-top:160px;margin-left: 275px; position : absolute; width : 162px;}
#bloco6{margin-top:40px;margin-left: 430px; position : absolute; width : 375px;}
#bloco7A{margin-top:310px;margin-left:20px; position : absolute; width : 375px;}
#bloco7{margin-top:330px;margin-left:20px; position : absolute; width : 375px;}

.titulo6{color: #000000; font-size: 20px; font-family: arial; font-weight: bold;}

</style>


 <!-- Bullet Navigator Style -->
<style>
        /* jssor slider bullet navigator skin 21 css */
        /*
        .jssorb21 div           (normal)
        .jssorb21 div:hover     (normal mouseover)
        .jssorb21 .av           (active)
        .jssorb21 .av:hover     (active mouseover)
        .jssorb21 .dn           (mousedown)
        */
        .jssorb21 {
            position: absolute;
            bottom: 26px;
            left: 6px;
        }
        .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
            position: absolute;
            /* size of bullet elment */
            width: 19px;
            height: 19px;
            text-align: center;
            line-height: 19px;
            color: white;
            font-size: 12px;
            background: url(img.banner/b21.png) no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb21 div { background-position: -5px -5px; }
        .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
        .jssorb21 .av { background-position: -65px -5px; }
        .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
</style>

    <!-- Arrow Navigator Style -->
<style>
        /* jssor slider arrow navigator skin 21 css */
        /*
        .jssora21l                  (normal)
        .jssora21r                  (normal)
        .jssora21l:hover            (normal mouseover)
        .jssora21r:hover            (normal mouseover)
        .jssora21l.jssora21ldn      (mousedown)
        .jssora21r.jssora21rdn      (mousedown)
        */
        .jssora21l, .jssora21r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url(img.banner/a21.png) center center no-repeat;
            overflow: hidden;
        }
        .jssora21l { background-position: -3px -33px; top: 123px; left: 8px; }
        .jssora21r { background-position: -63px -33px; top: 123px; right: 8px; }
        .jssora21l:hover { background-position: -123px -33px; }
        .jssora21r:hover { background-position: -183px -33px; }
        .jssora21l.jssora21ldn { background-position: -243px -33px; }
        .jssora21r.jssora21rdn { background-position: -303px -33px; }
</style>

 <!--
        Given a demo 'demos-jquery\full-width-slider.source.html'
        Go through following steps to transform jssor slider compatible with w3c standards and pass html validation.

        #1. Move styles inside 'head' tag
        #2. Add alt="" for all 'img' tag
        #3. Add 'data-' prefix for all custom attributes. e.g. u="image" -> data-u="image"
    -->

    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>

	<script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 1200,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1057));
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

	
	<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type="text/javascript">
    $(function() {
        $('.gallery a').lightBox();
    });
    </script>
</head>
<body>

<body background="imagens/fundo.png ">

<div id="logo">
	<img src = "imagens/logo.png" width = 260 height = 100 >
</div>

<div id = mae>
<div class = formulario>
<form action="loginwa_ok.php" method="POST"  >
<label>Usuario:</label>
<input type='text' size='20' name='login' id='login' class="caixa">
<label>Senha:</label>
<input type='text' size='10' name='senha' id='senha' class="caixa">
<input type= "submit" value="Logar" class="botao">
</form>
</div>
</div>


<div id="menu">
	    	<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="animais_perdidos.php">Animais Perdidos</a></li>
			<li><a href="cad_coleirra.php">Coleiras</a></li>
			<li><a href="pesq_coleira.php">Dicas</a></li>
			<li><a href="cad_animal.php">Depoimentos</a></li>		
	  	</ul>
</div>


<div id = mae2>

<div id = Titulo>
	<font class = titulo6> ZEUS - RAPOSO TAVARES, SÃO PAULO/SP</font>
</div>

<div id = bloco3>
	<div class=gallery><a href = "imagens/ImagemPerdido/9A.jpeg" width = 250 height = 230><img src = "imagens/ImagemPerdido/9A.jpeg" width = 250 height = 230></a></div>
</div>

<div id = bloco4>
	<div class=gallery><a href = "imagens/ImagemPerdido/9B.jpeg" width = 110 height = 110><img src = "imagens/ImagemPerdido/9B.jpeg" width = 110 height = 110></a></div>
</div>

<div id = bloco5>
	<div class=gallery><a href = "imagens/ImagemPerdido/9.jpeg" width = 110 height = 110><img src = "imagens/ImagemPerdido/9.jpeg" width = 110 height = 110></a></div>
</div>

<div id = bloco6>
	<font class = texto1>RAÇA:</font> <font class = texto3>Border Collie</font>
	<font class = texto1><br><br>PERDIDO EM:</font> <font class = texto3>25/06/2016</font>
	<font class = texto1><br><br>ENDEREÇO:</font> <font class = texto3>RAPOSO TAVARES, SÃO PAULO/SP</font>
	<font class = texto1><br><br>CONTATO: </font> <font class = texto3>Giovanna</font>
	<font class = texto1><br><br>E-MAIL: </font> <font class = texto3>grbonis@gmail.com</font>
	<font class = texto1><br><br>Where's Coleira: </font> <font class = texto3>Não Possui</font>
	<font class = texto1><br><br>MAIS INFORMAÇÕES: </font> <font class = texto3>Sem informações adicionais</font>
</div>

<div id = bloco7A>
	<font class = texto1>LOCALIZAÇÃO:</font>
</div>

<div id = bloco7>
	<img src = "imagens/ImagemPerdido/I-MAP.png" width = 910 height = 300></div>
</div>




</div>





<div id = "redes2">
	<div id = "copy2"><font class = copyright2>Siga-nos nas Redes Sociais:</font></div>
	
<div id = "blocorede2">
	<img src = "imagens/face.png" width = 50 height = 50 >
	<img src = "imagens/insta.png" width = 50 height = 50 >
	<img src = "imagens/google.png" width = 50 height = 50 >
	<img src = "imagens/twitter.png" width = 50 height = 50 >
</div>
</div>

<div id = "rodape2">
	<div id = "copy2"><font class = copyright>© Copyright Where's My Animal	2015 - 2016. Todos os direitos reservados. Entre em contato: Wheremyanimal@outlook.com com ou (31)3522-9747</font></div>
</div>
</body>	
</html>