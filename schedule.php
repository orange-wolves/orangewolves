<!DOCTYPE html>
<html>
<header>
    <h1>Schedule</h1>
</header>
<body>
    <?php include("resources/layout/header.html"); ?>

    // Demo list created by Ibrahim and Asim. still being worked on.
    <?php
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
      
	 /*
	 Old code will delete later.
	 while($row = mysqli_fetch_array($result)){
            $eventName = $row["name"];
            $description = $row["description"];
            $date = $row["date"];
            $teamID = $row["teamID"];
            $busID = $row["busID"];
            echo "<h2>$eventName</h2>";
            echo "<h3>$date</h3>";
            echo "<p>$description</p><br><br>";
     

	 }  */
	 
  echo "<table border=1>";
           echo "<tr><td> Day 1</td><td>Description</tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-15") 
			  {
				  
               echo "<tr>";
               echo "<td >$row[date] $row[name]</td>";
			   echo "<td >$row[description]</td>";
               echo "</tr>";
			  }
			  
           } 
		   
           echo "</table>";
		   
		   echo "<br></br>";
		   
		    $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		  
		  echo "<table border=1>";
           echo "<tr><td>Day 2</td><td>Description</tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-16") 
			  {
				  
               echo "<tr>";
               echo "<td >$row[date] $row[name]</td>";
			   echo "<td >$row[description]</td>";
               echo "</tr>";
			  }
			  
           } 
		   
           echo "</table>";
		   
		    echo "<br></br>";
		   
		    $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		   echo "<table border=1>";
           echo "<tr><td>Day 3</td><td>Description</tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-17") 
			  {
				
               echo "<tr>";
               echo "<td >$row[date] $row[name]</td>";
			   echo "<td >$row[description]</td>";
               echo "</tr>";
			  }
			  
			  
           } 
		   
           echo "</table>";
		   
		   
           mysqli_close($conn);
		
    ?>
    
</body>

<?php include("resources/layout/footer.html"); ?>

</html>
