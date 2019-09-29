

<!----------------------------- side arrow nav ---------------------------------->
<link rel="stylesheet" type="text/css" href="../resources/css/team.css">


<?php
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

            $i = $_SERVER['PHP_SELF'];
            $i = trim($i,"/orangewolves/teams/");
            $pagenumber = array_search($i, $page);

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