<!DOCTYPE html>
<html>

	<head>
		<title>Orange Wolves Homepage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="stylesheet" type="text/css" href="resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="resources/css/header.css">
		<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
		<link rel="stylesheet" type="text/css" href="resources/css/schedule.css">
	</head>
		
	<body>
		<div class="webpage">	
			<div class="pagecontent col-12">

<!-----------------------------HEADER------------------------------>
				
				<div class="row content">
					<header>
						<?php include("resources/layout/header.html"); ?>
					</header>
				</div>

<!-----------------------------CONTENT------------------------------>					
				
<div class="row">
					

	<div class="row">
	
	
	
		<div class="col-12">
			
			<?php
	
	
			 date_default_timezone_set('Australia/Canberra');
			$today=date('Y-m-d');
			
	
			require 'resources/php/dbConnectOrangeWolves.php';
			$sql= "SELECT * FROM events";
			$result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
			
			?>
		
		
			<?php
				if($today=='2019-11-17'||$today=='2019-11-15'||$today=='2019-11-16')
				{
					{echo"<h1>Schedule</h1>";}
					
					
					
				}
			
			
				else
				{
					echo"<h1>Event Starts</h1>";
					echo"<h1>15-17 November </h1>";
				}
			
				?>
								
		</div>
	</div>

	
	<div class="row"> <!---- day one container ----->
	
			
		
		
		
		
		<?php
	
	
	 date_default_timezone_set('Australia/Canberra');
	$today=date('Y-m-d');
	  $time = date("H:i:s");
	
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		?>
		
		
		<!--table 1---->
		
		
		<div class="col-4"> 
			<div class="row"> 
				<div class="col-12"> <!---- day one div----->
				<h1>Friday </h1>
				
				</div>
				
					<div class="row "> <!--- table rows with event and discrip--->
						
							
							<?php
				while ($row = mysqli_fetch_array($result))
				 {
							  
					 if ($row['date'] =="2019-11-15") 
						{
							
							if($today==$row['date'])
								
							{
              
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname' style=\"background-color:green;\">";
																
								 echo " <h2>$row[name]</h2>";
								 echo date("g:i a", strtotime($row['startTime'])); 
								 echo "-";
								 echo date("g:i a", strtotime($row['endTime']));
											
								echo"</div>";
								if(($time>=$row['startTime']) && ($time<=$row['endTime'])  )
								{
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\"  style=\"border:3px solid yellow;\">";
								}
								else  
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\" '>";
								echo "$row[description]";
								
							
								
								echo"</div>";
								
								
								echo"</div>";
				
								
				
				
			
							}
							elseif($today==$today)
							{
				
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname'>";
								echo "$row[name]";
								echo"</div>";
								echo"<div class='col-12 eventdiscription'>";
								echo "$row[description]";
								echo"</div>";
								echo"</div>";
				
				
			   
							}
              
				
								
						}
							  
								
				} ?>
			
		   
		
					</div>
				
			</div>
				
		</div>
		
			
			
			<?php
	
	
	 date_default_timezone_set('Australia/Canberra');
	$today=date('Y-m-d');
	
	
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		?>
			
			<div class="col-4"> 
			<div class="row"> 
				<div class="col-12"> <!---- day one div----->
				<h1>Saturday</h1>
				
				</div>
				
					<div class="row "> <!--- table rows with event and discrip--->
						
							
											<?php
				while ($row = mysqli_fetch_array($result))
				 {
							  
					 if ($row['date'] =="2019-11-16") 
						{
							
							if($today==$row['date'])
								
							{
              
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname' style=\"background-color:green;\">";
																
								 echo " <h2>$row[name]</h2>";
								 echo date("g:i a", strtotime($row['startTime'])); 
								 echo "-";
								 echo date("g:i a", strtotime($row['endTime']));
											
								echo"</div>";
								if(($time>=$row['startTime']) && ($time<=$row['endTime'])  )
								{
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\"  style=\"border:3px solid yellow;\">";
								}
								else  
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\" '>";
								echo "$row[description]";
								
							
								
								echo"</div>";
								
								
								echo"</div>";
				
								
				
				
			
							}
							elseif($today==$today)
							{
				
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname'>";
								echo "$row[name]";
								echo"</div>";
								echo"<div class='col-12 eventdiscription'>";
								echo "$row[description]";
								echo"</div>";
								echo"</div>";
				
				
							}
              
				
								
						}
							  
								
				} ?>
			
		   
		
					</div>
				
			</div>
				
		</div>
		
		
		<?php
	
	
	 date_default_timezone_set('Australia/Canberra');
	$today=date('Y-m-d');
	
	
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
		?>
			
			<div class="col-4"> 
			<div class="row"> 
				<div class="col-12"> <!---- day one div----->
				<h1>Sunday</h1>
				
				</div>
				
					<div class="row "> <!--- table rows with event and discrip--->
						
							
										<?php
				while ($row = mysqli_fetch_array($result))
				 {
							  
					 if ($row['date'] =="2019-11-17") 
						{
							
							if($today==$row['date'])
								
							{
              
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname' style=\"background-color:green;\">";
																
								 echo " <h2>$row[name]</h2>";
								 echo date("g:i a", strtotime($row['startTime'])); 
								 echo "-";
								 echo date("g:i a", strtotime($row['endTime']));
											
								echo"</div>";
								if(($time>=$row['startTime']) && ($time<=$row['endTime'])  )
								{
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\"  style=\"border:3px solid yellow;\">";
								}
								else  
								echo"<div class=\"col-12 eventinfo-$row[eventID] event-$row[eventID]\" '>";
								echo "$row[description]";
								
							
								
								echo"</div>";
								
								
								echo"</div>";
				
								
				
				
			
							}
							elseif($today==$today)
							{
				
				
								echo"<div class='row'>";
								echo"<div class='col-12 eventname'>";
								echo "$row[name]";
								echo"</div>";
								echo"<div class='col-12 eventdiscription'>";
								echo "$row[description]";
								echo"</div>";
								echo"</div>";
				
				
			   
							}
              
				
								
						}
							  
								
				} ?>
			
		   
		
					</div>
				
			</div>
				
		</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
	

	
	
	
		
	
	
	
		
	
	
					
					










    <?php
	
	/*
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
				if($today=="2019-09-23")
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
				
				
				   old code will delete later
			  echo "<tr>"; 
              ?><td bgcolor="#FFA500"> <?php echo"$row[date] $row[name]</td>";
			   echo "<td >$row[description]</td>";
               echo "</tr>";
				
				
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
		   
		    echo "<br><br><h1>yep this works </h1>";
           mysqli_close($conn);
		
  
    
					
				*/	
					  ?>
					


				</div>

<!-----------------------------FOOTER------------------------------>
				
				<div class="row">
					<footer>
						<?php include("resources/layout/footer.html"); ?>
					</footer>
				</div>


			</div>
		</div>
	</body>
</html>











