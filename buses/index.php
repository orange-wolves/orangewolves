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
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="icon" href="../resources/images/OrangeWolvesLogo.svg">
		<link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/header.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
		<link rel="stylesheet" type="text/css" href="../resources/css/pages.css">
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
				
				<div class="col-12 content busportal-container">
					<div class="row content">
						<div class="col-4 bus-portal">
							<a href="bus-1.php">
							<img src="../resources/images/placeholder.svg" alt="horticulture bus">
							<h1>Horticulture</h1>
							</a>
						</div>
			
						<div class="col-4 bus-portal">
							<a href="bus-2.php">
							<img src="../resources/images/placeholder.svg" alt="fashion, hair & makeup bus">
							<h1>Fashion, Hair & Makeup</h1>
							</a>
						</div>

						<div class="col-4 bus-portal">
							<a href="bus-3.php">
							<img src="../resources/images/placeholder.svg" alt="media bus">
							<h1>Media</h1>
							</a>
						</div>

					</div>
					<div class="row">

						<div class="col-4 bus-portal">
							<a href="bus-4.php">
							<img src="../resources/images/placeholder.svg" alt="yurauna bus">
							<h1>Yurauna</h1>
							</a>
						</div>

						<div class="col-4 bus-portal">
							<a href="bus-5.php">
							<img src="../resources/images/placeholder.svg" alt="visual arts bus">
							<h1>Visual Arts</h1>
							</a>
						</div>

						<div class="col-4 bus-portal">
							<a href="bus-6.php">
							<img src="../resources/images/placeholder.svg" alt="design den bus">
							<h1>Design Den</h1>
							</a>
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
