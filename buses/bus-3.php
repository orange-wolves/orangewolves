<!DOCTYPE html>
<html>
    <head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150729305-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-150729305-1');
	</script>
        <title>Bus 3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
        <link rel="icon" href="../resources/images/OrangeWolvesLogo.svg">
        <link rel="stylesheet" type="text/css" href="../resources/css/pages.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/header.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
    </head>

    <body>
        <div class = "webpage">
<!----------------------------------Header------------------------------------------------------>
            <div class="row">
                    <header>
                        <?php include("../resources/layout/header.html"); ?>
                    </header>
            </div>

<!----------------------------------Body------------------------------------------------------>            
            <div class="row">
                <!----------First column--------->
                <div class="col-4 conMod">
                    <!----------1th block in left side, content discription--------->
                    <div class="row" >
                        <div id='busIcon'><img src="../resources/images/MediaBus.svg" alt="Bus Icon" ></div>
                    </div>
                    <div class="row" >
                        <p id="busbrief">Bus 2</p>
                    </div>
                    <div class="row info-container">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis quam non augue convallis tincidunt.</p>
                    </div>

                    <!----------2th block in left side, display image1--------->
                    <div class="imageContainer">
                        <img src="../resources/images/image_545x380.png" alt="image" class="image">
                        <img src="../resources/images/image_545x380.png" alt="image" class="image">
                        <img src="../resources/images/image_545x380.png" alt="image" class="image">
                    </div>
                </div>
                <!----------Second column--------->
                <div class="col-8">
                    <!----------1th block in right side, display image1--------->
                    <div class="row">
                            <img src="../resources/images/image_993x324.png" alt="image" class="image">
                    </div>
                    
                    <!----------2th block in right side, ??introduce??--------->
                    <div class="row conLight" id="busSummary">
                            <!--Sub column of introduce-->
                            <div class="row col-12">
                                <h1>Introduce</h1>
                            </div>
                            <div class="col-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at imperdiet velit. Quisque lobortis volutpat lorem a varius. Praesent gravida ac augue ac fermentum. Quisque cursus luctus tellus, a molestie ante rutrum facilisis. Mauris consequat, tortor maximus euismod convallis, sem ante fermentum lacus, ac sagittis nulla metus imperdiet elit. Morbi elementum, diam a sagittis volutpat, ligula ante interdum velit, at eleifend enim lectus vel diam. Donec aliquet a nisi vel condimentum. Suspendisse potenti.</p>
                            </div>
                            <!--Sub column of introduce-->
                            <div class="col-6">
                                <p>Pellentesque porttitor condimentum massa quis ornare. Integer vestibulum ultrices arcu, eget dapibus enim auctor sed. In in mi posuere leo luctus sollicitudin. Sed facilisis, quam vel aliquet fringilla, eros ex tincidunt nibh, quis maximus mi mi quis nisi. Ut finibus nisi felis, nec vulputate tortor convallis quis. Nunc nec pharetra ex. Ut sit amet enim nulla. Cras pretium arcu velit, consequat bibendum turpis gravida vulputate. Pellentesque rutrum, massa nec bibendum interdum, orci leo rhoncus sapien, sit amet porta velit nisl nec magna. Proin id quam vel tortor molestie luctus et sit amet elit. Etiam in accumsan tortor, ac volutpat ligula.</p>
                            </div>
                    </div>

                    <!----------3th block in right side, display image2--------->
                    <div class="row">
                            <img src="../resources/images/image_993x449.png" alt="image" class="image">
                    </div>
                </div> 
            </div>
<!----------------------------------Footer------------------------------------------------------>            
            <div class="row">
                    <header>
                        <?php include("../resources/layout/footer.html"); ?>
                    </header>
            </div>
        </div>
    </body>
</html>