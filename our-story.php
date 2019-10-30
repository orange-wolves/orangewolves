<!DOCTYPE html>
<html>

	<head>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150729305-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-150729305-1');
	</script>
		<title>Our Story</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="stylesheet" type="text/css" href="resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="resources/css/header.css">
		<link rel="stylesheet" type="text/css" href="resources/css/footer.css">
		<link rel="stylesheet" type="text/css" href="resources/css/pages.css">
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
				<div class="wrapper">
				<div class="row">
					<div class="col-12 info-hero">
						<div class="content-heading">
							<h1>Our Story</h1>
						</div>
					</div>
				</div>
				<div class="row">

				<div class="col-3 indent storypage">
				<h1>orange wolves</h1>
				<ul class="removedots indent-story">	

						<?php  echo"<a href=our-story.php?team_name=T1><li><h2>Fashion</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T3><li><h2>Graphic Design</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T4><li><h2>Hair</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T5><li><h2>Horticulture</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T6><li><h2>Information technology</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T7><li><h2>Interior Design</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T8><li><h2>Makeup</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T9><li><h2>Media</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T10><li><h2>Music</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T11><li><h2>Photography</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T12><li><h2>Visual Art</h2></a></li>";
						  echo"<a href=our-story.php?team_name=T13><li><h2>Yurauna</h2></a></li>";
						  ?>
				
					</ul>	
				</div>
				<div class="col-9 info-container ">
<?php			
				include('DB_our_story.php');
				if(empty($_GET['team_name']))
				{
					$team_name = 'T0';
				}else{
				$team_name = $_GET['team_name'];
				}
				//echo"$team_name";
				$sql = "SELECT team_name ,title ,description FROM storys WHERE team_name ='$team_name'";
				//echo "$sql";
				
				echo"<div class=story>";
				$results = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($results))
				{
					echo"<h1>$row[1]</h1>";
					echo"<p>$row[2]</p>";
				}
				echo"</div>"


?>
				</div>
				

				</div>
									
				


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