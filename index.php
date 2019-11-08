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
	
		<title>Orange Wolves Homepage</title>
		<?php include("resources/layout/style.html");?>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
		<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>
	</head>
		
	<body>
		<div class="webpage">	
			<div class="col-12">

<!-----------------------------HEADER------------------------------>
				
				<div class="row">
					<header>
						<?php include("resources/layout/header.html"); ?>
					</header>
				</div>

<!-----------------------------CONTENT------------------------------>					
				
							<!------HERO------>	
				<div class="row info-hero content">
				<h1>FEAST YOUR EYES ON THIS!</h1><br>
					<div class="col-6">
						<p><b><I>Orange Wolves</I></b> is a multi-disciplinary immersive experience that encompasses music, media, arts, fashion, technology and design.</p>
						<br>
						<p>The event will be a celebration of creativity, technology and performance - providing the audience with a creative, transformational and immersive experience.</p>
						<br>
					</div>
					<div class="col-6">
						<p>The plan is to use <b>6</b> retired Action buses that will be transformed into small cinemas, music venues, fashion parades, make spaces, and installation spaces - located in the CANBERRA CBD, for three days</p>
						<br>
						<h2>CANBERRA - CITY WALK</h2>
						<h2>26 - 28 November 2019</h2>
					</div>
				</div>
				<div class="info-hero" style="text-align: center;"><h2>Fashion Parade – November 26 at 7 pm </h2></div>

							<!------Information------>	

					<!--Medium/Wide information boxes row 1 -->
				<div class="row">
					<div class="col-6 media-container">
						<video controls class="homepage-media">
							<source src="resources/videos/FEAST-YOUR-EYES.mp4" type="video/mp4" />
						</video>
					</div>
					<div class="col-6 media-container">
						<div class="homepage-media" id="orangewolves-map"></div>
					</div>
				</div>
					<!--Medium/Small information boxes row 1 -->

				<div class="row buslink-container">

					<div class="col-2 bus-link">
						<a href="buses/bus-1.php">
						<div class="bus-link-header-long">
							<h3>Floristry &<br> Landscaping</h3>
						</div>
						<div class="buslink-body">
							<img src="resources/images/HorticultureBus.svg" alt="Floristry and Landscaping bus">
						</div>
						</a>
					</div>
					
						<div class="col-2 bus-link">
						<a href="buses/bus-2.php">
						<div class="bus-link-header-long">
							<h3>Fashion, Hair <br>& Beauty</h3>
						</div>
						<div class="buslink-body">	
							<img src="resources/images/FashionHairMakeupBus.svg" alt="hair & beauty bus">
						</div>
						</a>
					</div>
					
					<div class="col-2 bus-link">
						<a href="buses/bus-1.php">
						<div class="bus-link-header">
							<h3>Night Ride<h3>
						</div>
						<div class="buslink-body">
							<img src="resources/images/MediaBus.svg" alt="media & Sound">
						</div>
						</a>
					</div>

					<div class="col-2 bus-link">
						<a href="buses/bus-4.php">
						<div class="bus-link-header">
							<h3>Music<h3>
						</div>
							<div class="buslink-body">
								
								<img src="resources/images/MusicBus.svg" alt="music bus">
							</div>
						</a>
					</div>

					<div class="col-2 bus-link">
						<a href="buses/bus-5.php">
						<div class="bus-link-header">
							<h3>Visual Arts<h3>
						</div>
							<div class="buslink-body">
								
								<img src="resources/images/VisualArtsBus.svg" alt="visual arts bus">
							</div>
						</a>
					</div>

					<div class="col-2 bus-link">
						<a href="buses/bus-6.php">
						<div class="bus-link-header">
							<h3>Design Den<h3>
						</div>
							<div class="buslink-body">
								
								<img src="resources/images/GraphicDesignBus.svg" alt="design den bus">
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
	var mymap = L.map('orangewolves-map').setView([-35.279827, 149.132210], 15);
	
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoib3Jhbmdld29sdmVzIiwiYSI6ImNrMjJpbWpscTA2ZnIzZnBmczJjNmoxa2IifQ.g_RwduUVRTEDMvgCowI95Q', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 18,
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1Ijoib3Jhbmdld29sdmVzIiwiYSI6ImNrMjJpbWpscTA2ZnIzZnBmczJjNmoxa2IifQ.g_RwduUVRTEDMvgCowI95Q'
	}).addTo(mymap);

	L.marker([-35.279827, 149.132210]).addTo(mymap);
	mymap.scrollWheelZoom.disable();
</script>

</html> 