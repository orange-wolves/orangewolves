<?php require '/../resources/php/dbConnectOrangeWolves.php';?><!DOCTYPE html>

<html>
   <header>
      <h1>Search Results</h1>
      <?php include("/../resources/layout/header.html"); ?><br>
   </header>
   <script>
	function changeText() {
		document.getElementById("final").innerHTML = //Sets the id content to the one below
		document.getElementById("TotalResults").textContent;
      }
   </script>
   <style>
      div {
         border: 2px solid red;
         border-radius: 5px;
         margin-top: 20px;
         margin-bottom: 20px;
         margin-right: 55%;
         margin-left: 20px;
      }
   </style>
   <body onload="changeText()">
         <?php
         $visabletext = $_GET['searchtext'];//to be visable for the user
         $visabletext = htmlspecialchars($visabletext);
         $searchtext = $_GET['searchtext'];
         $searchtext = trim($searchtext);
         $searchtext = strip_tags($searchtext);
         $searchtext = addslashes($searchtext);
         $textlength = 200;//This relates to the max characters shown on the description

         $text; //Area to hold text for modification 

         $endlink;
		   $results = 0;

         echo "<p>Following results for: $visabletext</p>";
         echo "<p id=final></p>";//Information is shown here is there are results

         $sql =  "SELECT orangewolves.bus.busName, orangewolves.bus.description
                  FROM orangewolves.bus 
                  WHERE orangewolves.bus.busName LIKE '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[0]);
            echo "<a href=\"../buses/$endlink\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         $sql =  "SELECT orangewolves.events.name, orangewolves.events.description
                  FROM orangewolves.events
                  WHERE orangewolves.events.name LIKE '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record 1 - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[0]);
            echo "<a href=\"../event-info\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         $sql =  "SELECT orangewolves.teams.roles, orangewolves.teams.description, orangewolves.contact.name
                  FROM orangewolves.contact
                     INNER JOIN orangewolves.teams ON orangewolves.contact.nameID = orangewolves.teams.nameID
                  WHERE orangewolves.contact.name LIKE '%$searchtext%' OR orangewolves.teams.roles LIKE '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record 2 - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[0]);
            echo "<a href=\"../teams/$endlink\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            $text = $line_array[2];//Contacts Names
            if (stripos($text, $searchtext) !== false){
               echo "<tr><td>team members: ...".stringWordBold($text,$searchtext)."</td></tr>";
            }
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         $sql =  "SELECT orangewolves.bus.busname, orangewolves.bus.description
                  FROM orangewolves.bus
                  WHERE orangewolves.bus.description LIKE '%$searchtext%' AND orangewolves.bus.busname NOT like '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record 3 - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[0]);
            echo "<a href=\"../buses/$endlink\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         $sql =  "SELECT orangewolves.events.name, orangewolves.events.description
                  FROM orangewolves.events
                  WHERE orangewolves.events.description LIKE '%$searchtext%' AND orangewolves.events.name NOT like '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record 4 - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[1]);
            echo "<a href=\"../event-info\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         $sql =  "SELECT orangewolves.teams.roles, orangewolves.teams.description
                  FROM orangewolves.contact
                     INNER JOIN orangewolves.teams ON orangewolves.contact.nameID = orangewolves.teams.nameID
                  WHERE orangewolves.teams.description LIKE '%$searchtext%' AND orangewolves.teams.roles NOT like '%$searchtext%' AND orangewolves.contact.name NOT like '%$searchtext%';";
         //echo "<p>$sql</p>";
         $result = mysqli_query($conn, $sql) or die("Error searching record 5 - ".mysqli_error($conn));

         while ($line_array = mysqli_fetch_array($result))
         {
            $endlink = str_replace(' ', '-', $line_array[0]);
            echo "<a href=\"../teams/$endlink\"><div>";
            echo "<table>";
            echo "<tr><td><h3>".stringWordBold($line_array[0],$searchtext)."</h3></td></tr>";//Title
            $text = $line_array[1];//Descriptions
            $text = formatShownString($text, $searchtext, $textlength);
            echo "<tr><td><p>".stringWordBold($text,$searchtext)."</p></td></tr>";
            echo "</table>";
            echo "</div></a>";
            $results++;
         }

         if($results > 0){
            echo "<p id=TotalResults>There are $results results</p>";
         }
         else
            echo "<p>There are no results</p>";

         echo "<p>End results for: $visabletext</p>";
         ?>
      </body>
      
      <?php include("../resources/layout/footer.html"); ?>
</html>