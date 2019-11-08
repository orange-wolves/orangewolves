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
		<title>Orange Wolves Bus Portal</title>
		<?php include("../resources/layout/style.html");?>
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
				
				<div class="col-12 content">

					<div class="row content busportal-container">

						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-1.php">
								<img src="../resources/images/HorticultureBus.svg" alt="horticulture bus">
								<h1>Horticulture</h1>
								</a>
							</div>
						</div>
			
						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-2.php">
								<img src="../resources/images/FashionHairMakeupBus.svg" alt="hair & beauty bus">
								<h1>Fashion, Hair & Beauty</h1>
								</a>
							</div>
						</div>

						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-3.php">
								<img src="../resources/images/MediaBus.svg" alt="media bus">
								<h1>Night Ride</h1>
								</a>
							</div>
						</div>

					</div>
					<div class="content busportal-container">

						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-4.php">
								<img src="../resources/images/MusicBus.svg" alt="music bus">
								<h1>Music</h1>
								</a>
							</div>
						</div>

						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-5.php">
								<img src="../resources/images/VisualArtsBus.svg" alt="visual arts bus">
								<h1>Visual Arts</h1>
								</a>
							</div>
						</div>

						<div class="col-4 bus-portal">
							<div class="busportal-image">
								<a href="bus-6.php">
								<img src="../resources/images/GraphicDesignBus.svg" alt="design den bus">
								<h1>Design Den</h1>
								</a>
							</div>
						</div>

					</div>
				</div>
                
<!-----------------------------FOOTER------------------------------>
				
				<div class="row content">
					<footer>
						<?php include("../resources/layout/footer.html"); 
						?>
					</footer>
				</div>

			</div>
		</div>
	</body>
</html>
