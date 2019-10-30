<!DOCTYPE html>
<html>
    <head>
        <title>Bus 1</title>
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
                <div class="col-4">
                    <!----------1th block in left side, content discription--------->
                    <div class="row">
                        <div id="busbrief">
                            <div id="busIcon"><img src="../resources/images/Bus.svg" alt="Bus Icon" ></div>
                            <div class="bus-relative">
                                <div id="busDescription">Bus 1</div>
                            </div>
                        </div>
                    </div>
                    <div class="row info-container">
                        <p><b>Certificate III Floristry</b> - (Interpret Floristry Design Briefs, Design Floristry Products)<br><b>Certificate III Landscape Construction</b> - (Erect Timber Structures, Plant Establishment, Implement a Paving Project)</p>
                    </div>

                    <!----------2th block in left side, display image1--------->
                </div>
                <!----------Second column--------->
                <div class="col-8">
                    <!----------1th block in right side, display image1--------->
                    
                    <!----------2th block in right side, ??introduce??--------->
                    <div class="row info-container">
                            <!--Sub column of introduce-->
                            <div class="row col-12">
                                <h1>Horticulture Bus - Description</h1>
                            </div>
                            <div class="col-12">
                                <p>Our bus takes audiences on a horticultural journey which explores our connection to places and environments. Starting from the quintessential Aussie backyard, journey through a range of landscapes:</p>
                                <br>
                                <p>cloudscapes and lush tropical spaces transform into a growing, hanging installation that recreates the sights, smells and sounds of the Australian bush.  The installations feature sustainable practices including repurposed and recycled materials, solar power and foam-free floral constructions.</p>
                            </div>
                    </div>

                    <!----------3th block in right side, display image2--------->
                    <div class="row">
                            <img src="../resources/images/bus1_img1.jpg" alt="image"  class="image">
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