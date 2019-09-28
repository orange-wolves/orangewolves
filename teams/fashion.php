<!DOCTYPE html>
<html>
    <head>
        <title>Fashion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
        <link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/header.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/bus1.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/team.css">
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

<!----------------------------- side arrow nav ---------------------------------->
            
<?php

            $pagenumber = 2;
            $page = array("index.php",    //team portal
            "building-design.php",        //page 1
            "fashion.php",                //page 2
            "graphic-design.php",         //page 3
            "hair-makeup.php",            //page 4
            "interior-design.php",        //page 5
            "it.php",                     //page 6
            "media.php",                  //page 7
            "music.php",                  //page 8
            "photography.php",            //page 9
            "sound-production.php",       //page 10
            "visual-arts.php");           //page 11

            $pageup = $page[$pagenumber+1];
            $pagedown = $page[$pagenumber-1];

            echo "<div class=\"sidebuttion\">";
            if ($pagenumber == 1)
            {
                echo "<div class =\"arrowR\"><a href=\"$pageup\"><img class=\"imgfit\"src=\"../resources/images/arrow-left.svg\"></div></a>";  
            }else if ($pagenumber == 11)
            {
                echo "<div class =\"arrowL\"><a href=\"$pagedown\"><img class=\"imgfit\"src=\"../resources/images/arrow-left.svg\"></div></a>";    
            }else
            {
                echo "<div class =\"arrowL\"><a href=\"$pagedown\"><img class=\"imgfit\"src=\"../resources/images/arrow-left.svg\"></div></a>";
                echo "<div class =\"arrowR\"><a href=\"$pageup\"><img class=\"imgfit\"src=\"../resources/images/arrow-left.svg\"></div></a>";
            }
            echo "</div>";
            ?>
            
<!----------------------------- side arrow nav ---------------------------------->   




            <div class="row content_center">
                <!----------First column--------->
                <div class="col-4 conMod">
                    <!----------1th block in left side, content discription--------->
                    <div class="row">
                        <p id="left_top_title">Fashion</p>
                        <p class="left_top_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis quam non augue convallis tincidunt.</p><br><br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>

                    <!----------2th block in left side, display image1--------->
                    <div class="row left_image">
                        <img src="../resources/images/image_545x380.png" alt="image">
                    </div>
                    
                    <!----------3th block in left side, display image2--------->
                    <div class="row left_image">
                        <img src="../resources/images/image_545x380.png" alt="image">
                    </div>

                    <!----------4th block in left side, display image3--------->
                    <div class="row left_image bottom">
                        <img src="../resources/images/image_545x380.png" alt="image">
                    </div>
                </div>
                <!----------Second column--------->
                <div class="col-8">
                    <!----------1th block in right side, display image1--------->
                    <div class="row right_image_1">
                            <img src="../resources/images/image_993x324.png" alt="image">
                    </div>
                    
                    <!----------2th block in right side, ??introduce??--------->
                    <div class="row conLight right_text">
                            <!--Sub column of introduce-->
                            <div class="row col-12">
                                <br>
                                <p id="right_introduce_title">Introduce</p>
                                <br>
                            </div>
                            <div id="right_sub_column_1" class="col-6">
                                <p class="right_side_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque at imperdiet velit. Quisque lobortis volutpat lorem a varius. Praesent gravida ac augue ac fermentum. Quisque cursus luctus tellus, a molestie ante rutrum facilisis. Mauris consequat, tortor maximus euismod convallis, sem ante fermentum lacus, ac sagittis nulla metus imperdiet elit. Morbi elementum, diam a sagittis volutpat, ligula ante interdum velit, at eleifend enim lectus vel diam. Donec aliquet a nisi vel condimentum. Suspendisse potenti.</p>
                                <br>
                                <br>
                                <br>
                            </div>

                            <!--Sub column of introduce-->
                            <div id="right_sub_column_2" class="col-6">
                                <p class="right_side_text">Pellentesque porttitor condimentum massa quis ornare. Integer vestibulum ultrices arcu, eget dapibus enim auctor sed. In in mi posuere leo luctus sollicitudin. Sed facilisis, quam vel aliquet fringilla, eros ex tincidunt nibh, quis maximus mi mi quis nisi. Ut finibus nisi felis, nec vulputate tortor convallis quis. Nunc nec pharetra ex. Ut sit amet enim nulla. Cras pretium arcu velit, consequat bibendum turpis gravida vulputate. Pellentesque rutrum, massa nec bibendum interdum, orci leo rhoncus sapien, sit amet porta velit nisl nec magna. Proin id quam vel tortor molestie luctus et sit amet elit. Etiam in accumsan tortor, ac volutpat ligula.</p>
                            </div>
                            <!--Sub column of introduce-->

                            <!--Todo: display a photo or icon on top right. Need finish next time.-->
                    </div>

                    <!----------3th block in right side, display image2--------->
                    <div class="row right_image_2">
                            <img src="../resources/images/image_993x449.png" alt="image">
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