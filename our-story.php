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
	<script>
		function myFunctionStory() {
			document.getElementById("story-myDropdown").classList.toggle("show");
		}

		// Close the dropdown menu if the user clicks outside of it
		window.onclick = function(event) 
		{
			if (!event.target.matches('.story-dropbtn')) 
			{
				var dropdowns = document.getElementsByClassName("story-dropdown-content");
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
		<title>Our Story</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="icon" href="resources/images/OrangeWolvesFavIcon.png">
		<link rel="stylesheet" type="text/css" href="resources/css/layout.css">
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
									<button onclick="myFunctionStory()" class="story-dropbtn">Choose a Team Story
									 <i class="fa fa-caret-down"></i></button>
									<i class="down"></i>
							</div>
            </div>

						<div id="story-myDropdown" class="story-dropdown-content col-12">
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
						</div>
					</div>
				</div>


				<!---divs around the dynamic content --->
				<div class="row">
					<div class="col-12 info-container ">
					<div class="row">
    <div class="col-3 team-info"><img src="resources/images/Fashion-SABINA.JPG" alt="Sabina Delaney"></div>
    <div class="col-9 businfo-content"><p>Sabina Delaney is one of the graduating fashion students.<br><br>
    Partaking in musical theatre throughout high school sparked a passion for sewing.<br><br>
    After several years of ill-fitting garments and unfinished seams (the horror!), she finally decided to take a more professional approach.<br><br>
    Through her time at CIT, she has developed a keen interest in patternmaking.<br><br>
    Sabina's graduating collection has a strong focus on sustainability, using end-of-roll fabrics and fibres made from waste from the food industry, such as banana leaves and orange peels.<br><br>
    The collection was inspired by her love of handcrafts, focusing on embroidery and screen printing. Handcrafts are seeing a resurgence, as many people are shifting away from fast fashion and appreciate the connection that comes with creating something by hand.</p>
		</div>
		<div class="row">
		<div class="col-3 team-info"><img src="resources/images/Fashion-AMELIA.JPG" alt="Amelia Margi-Bull"></div>
				<div class="col-9 businfo-content"><p>Amelia Margi-Bull<br><br>
		My final design focuses on the movement of the neck and arms in the human body, and how human movement can be communicated via a sustainably sourced garment. The final design explores innovative ways on how to manipulate arm and neck movement through restriction and exaggeration of the garments shape and silhouette. When in the initial phase of market research I struggled to find garments which used exaggerated or restrictive silhouettes casually; each garment was highly promotional and used as statement pieces. This lead onto designing two pieces which were still trend based but which were also versatile and innovative; giving the customer styling freedom. All accessories and fabric are sustainably sourced and planet conscious. 
		</p></div>
		</div>
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