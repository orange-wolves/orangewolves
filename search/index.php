<!DOCTYPE html>
<html>

	<head>
		<title>Orange Wolves Search Result</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
      <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
      <script>
         function changeText() {
            document.getElementById("final").innerHTML = //Sets the id content to the one below
            document.getElementById("TotalResults").textContent;
            }
      </script>
      <style>
         div.searchResults {
            border: 2px solid red;
            border-radius: 5px;
            margin: 25px 50px;
            color: black;
         }
         a:link {
            text-decoration: none;
         }
      </style>
   </head>
   
		
	<body>
		<div class="webpage">	
			<div class="pagecontent col-12">

<!-----------------------------HEADER------------------------------>
				
				<div class="row">
					<header>
						<?php include("../resources/layout/header.html"); ?>
					</header>
				</div>

<!-----------------------------CONTENT------------------------------>					
				
				<div class="row">
					<h1>Search Result</h1>
               <?php
               function stringWordBold($str,$word)
               {
                  if (stripos($str, $word) !== false){//Here to ensure <b>/</b> won't appear
                     //%str is the entire string whilie $word is the word that will bolded.
                     $str = substr_replace($str,"<b>",strripos($str, $word),0);
                     $str = substr_replace($str,"</b>",strripos($str, $word)+strlen($word),0);
                  }
                  return $str;
               }
               function formatShownString($str, $word, $length){
                  //$length is meant to  be how many characters you want to be displayed
                  $count = strlen($str) / 3;
                  $pos = stripos($str, $word);
                  if(($count * 3) < $length){
                     return $str;
                  }
                  else if($pos < $count){
                     return substr($str, 0, $length)."...";
                  }
                  else if($pos  >= $count && $pos < ($count * 2)){
                  $str = substr($str, $pos-($length/2), $length);
                     return "...".$str."...";
                  }
                  else if($pos >= ($count * 2)){
                     return "...".substr($str, -$length);
                  }
               }
               require '/../resources/php/dbConnectOrangeWolves.php';
               $visabletext = $_GET['searchtext'];//to be visable for the user
               $visabletext = htmlspecialchars($visabletext);
               $searchtext = trim(mysqli_real_escape_string($conn, $_GET['searchtext']));//data sanitation
               $textlength = 200;//This relates to the max characters shown on the description

               $text; //Area to hold text for modification 

               $endlink;
               $results = 0;

               echo "<p>Following results for: $visabletext</p>";
               echo "<p id=final>Thing should be here</p>";//Information is shown here is there are results

               $sql =  "SELECT orangewolves.bus.busName, orangewolves.bus.description
                        FROM orangewolves.bus 
                        WHERE orangewolves.bus.busName LIKE '%$searchtext%';";
               //echo "<p>$sql</p>";
               $result = mysqli_query($conn, $sql) or die("Error searching record - ".mysqli_error($conn));

               while ($line_array = mysqli_fetch_array($result))
               {
                  $endlink = str_replace(' ', '-', $line_array[0]);
                  echo  "<a href=\"../buses/$endlink\"><div class=searchResults>";
                  echo        "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo        "<p>".stringWordBold($text,$searchtext)."</p>";
                  echo  "</div></a>";
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
                  echo "<a href=\"../event-info\"><div class=searchResults>";
                  echo "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo "<p>".stringWordBold($text,$searchtext)."</p>";
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
                  echo "<a href=\"../teams/$endlink\"><div class=searchResults>";
                  echo "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo "<p>".stringWordBold($text,$searchtext)."</p>";
                  $text = $line_array[2];//Contacts Names
                  if (stripos($text, $searchtext) !== false){
                     echo "<p>team members: ...".stringWordBold($text,$searchtext)."</p>";
                  }
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
                  echo "<a href=\"../buses/$endlink\"><div class=searchResults>";
                  echo "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo "<p>".stringWordBold($text,$searchtext)."</p>";
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
                  echo "<a href=\"../event-info\"><div class=searchResults>";
                  echo "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo "<p>".stringWordBold($text,$searchtext)."</p>";
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
                  echo "<a href=\"../teams/$endlink\"><div class=searchResults>";
                  echo "<h3>".stringWordBold($line_array[0],$searchtext)."</h3>";//Title
                  $text = $line_array[1];//Descriptions
                  $text = formatShownString($text, $searchtext, $textlength);
                  echo "<p>".stringWordBold($text,$searchtext)."</p>";
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
               <script>
                  changeText();
               </script>
				</div>

<!-----------------------------FOOTER------------------------------>
				
				<div class="row">
					<footer>
						<?php include("../resources/layout/footer.html"); ?>
					</footer>
				</div>


			</div>
		</div>
	</body>
</html>