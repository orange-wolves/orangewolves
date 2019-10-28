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
							Jumbotron or image slider.
						</div>
					</div>
				</div>
				<div class="row">

<?php
				include('DB_our_story.php');
				$sql = 'SELECT title ,description FROM storys';
				//echo "$sql";
				
				echo"<div class=story>";
				$results = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($results))
				{
					echo"<h1>$row[0]</h1>";
					echo"<p>$row[1]</p>";
				}
				echo"</div>"
?>

				

				<div class="col-9 info-container storypage">

				<?php include('teams.php')?>

				
					<h1><b>Orangewolves ICT team</b></h1><br>
					<p>This project was a great real world learning experience. <br>We are a small team of seven and most of us have never made a website or used html/Css before.</p>
					<p>During this project we learnt how to use PHP, HTML, CSS and JavaScript and we created our website using Visual Studio Code.<br><br> We enjoyed working together as a team and We are thankfull for the opportunity to be a part of the Orangewolves development team</p>

					<br><p><b>Our team of developers</b></p>
					<br><b>
					<ul class="indent">	
						
						<li>bad ray</li>
						<li>asim </li>
						<li>connor</li>
						<li>enforcer</li>
						<li>ibby</li>
						<li>lachlan</li>
						<li>other ray</li>
					</ul>
					
					</b><br>
					<p>Hope you like our website!</p>


					<br><p></p>
				</div>
				<div class="col-3 indent storypage">
				<ul class="removedots">	
						<h1>orange wolves

						<?php  echo"<a href=teams.php?id=\"T1\"><li>team1</li></a>";?>	
						<li>team2</li>
						<li>team3</li>
						<li>team4</li>
						<li>team5</li>
						<li>team6</li>
						<li>team7</li>
						<li>team8</li>
						<li>team9</li>
						<li>team10</li>
						<li>team11</li>
						<li>team12</li>
						</h1>
					</ul>	
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