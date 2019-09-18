<!DOCTYPE html>
<html>
    <head>
        <title>Bus 1</title>
        <link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/header.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/content.css">
    </head>

    <body>
        <div class = "webpage">
<!----------------------------------Header------------------------------------------------------>
            <div class="row content">
                    <header>
                        <?php include("../resources/layout/header.html"); ?>
                    </header>
            </div>

<!----------------------------------Body------------------------------------------------------>            
            <div class="row content_center">
                <!----------First column--------->
                <div class="col-4">
                    <!----------1th block in left side, content discription--------->
                    <div class="row discription">
                        <p id="left_top_title">BUS 1</p>
                        <p class="left_top_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis quam non augue convallis tincidunt.</p><br><br>
                    </div>

                    <!----------2th block in left side, display image1--------->
                    <div class="row left_image">
                        <img src="../resources/images/image_background.png" alt="image">
                    </div>
                    
                    <!----------3th block in left side, display image2--------->
                    <div class="row left_image">
                        <img src="../resources/images/image_background.png" alt="image">
                    </div>

                    <!----------4th block in left side, display image3--------->
                    <div class="row left_image">
                        <img src="../resources/images/image_background.png" alt="image">
                    </div>
                </div>
                <!----------Second column--------->
                <div class="col-8">
                    <!----------1th block in right side, display image1--------->
                    <div class="row right_image">
                            <img src="../resources/images/image_background_wide.png" alt="image">
                    </div>
                    
                    <!----------2th block in right side, ??introduce??--------->
                    <div id= "introduce" class="row">
                            <!--Sub column of introduce-->
                            <div class="right_sub_column">
                                <p id="right_introduce_title">Introduce</p>
                                <p class="right_side_text">Content should be here.</p>
                            </div>

                            <!--Sub column of introduce-->
                            <div class="right_sub_column">
                                <p class="right_side_text">Content should be here.</p>
                            </div>
                            <!--Sub column of introduce-->

                            <!--Todo: display a photo or icon on top right. Need finish next time.-->
                    </div>

                    <!----------3th block in right side, display image2--------->
                    <div class="row right_image">
                            <img src="../resources/images/image_background_wide.png" alt="image">
                    </div>
                </div> 
            </div>
<!----------------------------------Footer------------------------------------------------------>            
            <div class="row content">
                    <header>
                        <?php include("../resources/layout/footer.html"); ?>
                    </header>
            </div>
        </div>
    </body>
</html>