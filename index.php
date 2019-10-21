<!DOCTYPE html>
<html>

	<head>
		<title>Orange Wolves Homepage</title>
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
				
							<!------HERO------>	
				<div class="row info-hero">
				<h2><strong>FEAST YOUR EYES ON THIS!</strong></h2>
					<div class="col-6">
						<p><b><I>Orange Wolves</I></b> is a multi-disciplinary immersive experience that encompasses music, media, arts, fashion, technology and design.</p>
						<br>
						<p>The event will be a celebration of creativity, technology and performance - providing the audience with a creative, transformational and immersive experience.</p>
						<br>
					</div>
					<div class="col-6">
						<p>The plan is to use <b>6</b> retired Action buses that will be transformed into small cinemas, music venues, fashion parades, make spaces, and installation spaces - located in the CANBERRA CBD, for three days</p>
						<br>
						<p><b>26 - 28 November 2019</b><br></p>
					</div>
				</div>

							<!------Information------>	

					<!--Medium/Wide information boxes row 1 -->
				<div class="row">
					<div class="col-6 info-container image-container">
						<img src="resources/images/image_545x380.png" alt="image" id="HomePageImage">
					</div>
					<!--Requires a google API license agreement-->
					<div class="col-6 info-container" style="height:auto;">
						<div id="googleMap" style="height:400px;"></div>
					</div>
				</div>
					<!--Medium/Small information boxes row 1 -->

				<div class="row">
					<div class="col-6">
						<a href="buses/bus-1">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 1</h3>
									<p>Floristry & Landscape Construction</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
						<a href="buses/bus-2">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 2</h3>
									<p>tortor</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
						<a href="buses/bus-3">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 3</h3>
									<p>tortor</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="col-6">
						<a href="buses/bus-4">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 4</h3>
									<p>tortor</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
						<a href="buses/bus-5">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 5</h3>
									<p>tortor</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
						<a href="buses/bus-6">
							<div class="busLink">
								<div class="busLinkHeader">
									<h3>Bus 6</h3>
									<p>tortor</p>
								</div>
								<div class="busLinkBody">
									<div class="vertical-center">
										<img src="resources/images/Bus.svg" alt="image">
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

<!-----------------------------FOOTER---------------------------->
				
				<div class="row">
					<footer>
						<?php include("resources/layout/footer.html"); ?>
					</footer>
				</div>


			</div>
		</div>
	</body>

	<script>
		function myMap() {
		var mapProp= {
			center:new google.maps.LatLng(-35.279827, 149.132210),//Location of the buses
			zoom:5,
		};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
</html> 