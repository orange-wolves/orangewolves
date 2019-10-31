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
		<link rel="icon" href="resources/images/OrangeWolvesFavIcon.png">
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
						
						<div class="col-8 content-heading">
						
						<h1>Our Story</h1>
						</div>
						
						
						
						<div class="col-4">
							<div class="dropdown"name="dropdown">
									<button onclick="myFunctionStory()" class="dropbtnn">Choose a Team Story
									 <i class="fa fa-caret-down"></i></button>
									<i class="down"></i>
								
							</div>
                		</div>
				

						<div id="myDropdownn" class="dropdownn-content col-12">
										<div class="col-6">
											<a href="our-story.php?team_name=T1"><h2>Fashion</h2></a>
											<a href="our-story.php?team_name=T3"><h2>Graphic Design</h2></a>
											<a href="our-story.php?team_name=T4"><h2>Hair</h2></a>
											<a href="our-story.php?team_name=T5"><h2>Horticulture</h2></a>
											<a href="our-story.php?team_name=T6"><h2>Information technology</h2></a>
											<a href="our-story.php?team_name=T7"><h2>Interior Design</h2></a>
										</div>
										<div class="col-6">
											<a href="our-story.php?team_name=T8"><h2>Makeup</h2></a>
											<a href="our-story.php?team_name=T9"><h2>Media</h2></a>
											<a href="our-story.php?team_name=T10"><h2>Music</h2></a>
											<a href="our-story.php?team_name=T11"><h2>Photography</h2></a>
											<a href="our-story.php?team_name=T12"><h2>Visual Art</h2></a>
											<a href="our-story.php?team_name=T13"><h2>Yurauna</h2></a>
										</div>
						</div>
							
							
							
				<script>
						function myFunctionStory() {
							document.getElementById("myDropdownn").classList.toggle("show");
						}

						// Close the dropdown menu if the user clicks outside of it
				window.onclick = function(event) 
					{
					if (!event.target.matches('.dropbtnn')) 
					{
						var dropdowns = document.getElementsByClassName("dropdownn-content");
						var i;
						for (i = 0; i < dropdowns.length; i++) 
						{
							var openDropdown = dropdowns[i];
							if (openDropdown.classList.contains('show')) 
							{
								openDropdown.classList.remove('show');
							}
						}
					}
				}
				</script>

						</div>
					</div>
				</div>


				<!---divs around the dynamic content --->
				<div class="row">
					<div class="col-12 info-container ">
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
							echo"$row[2]";
						}
						echo"</div>"
						?>
					</div>
				</div>
				<!---divs around the dynamic content --->
								
				


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