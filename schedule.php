<!DOCTYPE html>
<html>
<head>
<style>
tr:hover {background-color: #f5f5f5;}
</style>
   <title>Schedule></title>
	<link rel="stylesheet" href="schedule.css" type="text/css" />
</head>
<body>
<h1>Schedule</h1>

    <?php// include("resources/layout/header.html"); ?>

	
  
    <?php
	 date_default_timezone_set('Australia/Canberra');
	$today=date('Y-m-d');
	
	
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
      
		  ?><p>Today date is  <?=$today?> </p> <?php
	  
	

  echo "<table border=1>";
           echo "<tr><th> Day 1</th><th>Description</th></tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-15") 
			  {
				if($today=="2019-09-16")
				{
               echo "<tr>";
				?><td bgcolor="#00FF00"> <?php echo"$row[date] $row[name]</td>";
				?><td bgcolor="#00FF00"> <?php echo"$row[description]</td>";
				}
				elseif($today==$today)
				{
				echo "<tr>";
				echo "<td>$row[date] $row[name]</td>";
				
			     echo "<td >$row[description]</td>";
				}
               echo "</tr>";
				
				
				 /*  old code will delete later
			  echo "<tr>"; 
              ?><td bgcolor="#FFA500"> <?php echo"$row[date] $row[name]</td>";
			   echo "<td >$row[description]</td>";
               echo "</tr>";*/
				
				
			  }
			  
           } 
		   
           echo "</table>";
		   
		   echo "<br></br>";
		   
		    $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		  
		  echo "<table border=1>";
           echo "<tr><th>Day 2</th><th>Description</th></tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-16") 
			  {
				  
				  if($today==$row['date'])
				{
               echo "<tr>";
					?><td bgcolor="#00FF00"> <?php echo"$row[date] $row[name]</td>";
					?><td bgcolor="#00FF00"> <?php echo"$row[description]</td>";
				}
				elseif($today==$today)
				{
				echo "<tr>";
				echo "<td>$row[date] $row[name]</td>";
				
			   echo "<td >$row[description]</td>";
				}
               echo "</tr>";
				  
				  
				  
              
			  }
			  
           } 
		   
           echo "</table>";
		   
		    echo "<br></br>";
		   
		    $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		   echo "<table border=1>";
           echo "<tr><th>Day 3</th><th>Description</th></tr>";
           
		   while ($row = mysqli_fetch_array($result))
           {
			  
			  if ($row['date'] =="2019-11-17") 
			  {
				
               if($today==$row['date'])
				{
               echo "<tr>";
				?><td bgcolor="#00FF00"> <?php echo"$row[date] $row[name]</td>";
				?><td bgcolor="#00FF00"> <?php echo"$row[description]</td>";
				}
				elseif($today==$today)
				{
				echo "<tr>";
				echo "<td>$row[date] $row[name]</td>";
				
			   echo "<td >$row[description]</td>";
				}
               echo "</tr>";
			   
			   
			 
			   
			  }
			  
			  
           } 
		   
           echo "</table>";
		   
		   
           mysqli_close($conn);
		
    ?>
    
</body>

<?php //include("resources/layout/footer.html"); ?>

</html>
