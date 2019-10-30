<!DOCTYPE html>
<html>
    <head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150729305-1"></script>';
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-150729305-1');
	</script>
        <title>Bus 5</title>
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
                    <div class="row">
                        <div id="busbrief">
                            <div id="busIcon"><img src="../resources/images/Bus.svg" alt="Bus Icon" ></div>
                            <div class="bus-relative">
                                <div id="busDescription">Visual Arts</div>
                            </div>
                        </div>
                    </div>
                    <div class="row info-container">
                        <p><b>Diploma of Visual Arts</b></p>
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
                                <h1>Introduction</h1>
                            </div>
                            <div class="col-12">
                                <p>CIT’s Visual Arts students are using Canberra’s emblematic Bogong Moth to explore contrasting notions of movement and stillness, sparkle and shelter, inside and outside. The exterior of the bus will be transformed into a shiny kinetic sculpture using thousands of discarded CDs. The surface will flutter in the breeze, and from afar viewers will see Bogong patterns across the bus, created by different surface treatments of the CDs and careful placement. The inside of the bus offers a sensory contrast as viewers enter a cave-like sanctuary, where Bogong sculptural forms and textures will provide calm and intriguing shelter from the bright lights of the outside. To realise this project students had to undertake a lot conceptual development, creative collaboration and extensive materials research and problem solving. Students tested out a range of creative approaches and generated innovative solutions to bring this ambitious project into reality.</p>
                            
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