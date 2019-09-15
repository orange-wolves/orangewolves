<!DOCTYPE html>
<html>

	<head>
		<title>Orange Wolves Bus Portal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" shrink-to-fit=no>
		<link rel="stylesheet" type="text/css" href="../resources/css/layout.css">
      <link rel="stylesheet" type="text/css" href="../resources/css/header.css">
      <link rel="stylesheet" type="text/css" href="../resources/css/footer.css">
      <link rel="stylesheet" type="text/css" href="../resources/css/search.css">
	</head>
	<style>
		.busPortal{
            color: #2699fb;
			background-color: #f1f8fe;
			text-align: center;
		}

		div.busPortal{
			border: .2em solid white;
			padding: 5px;
		}

		.busText{
			color: #ffffff;
			border: .2em solid white;
			padding: 5px;
            background-color: #7fc4fd;
		}		
		</style>
   
		
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
				
                <div class="row">
					<div class="col-3 busPortal" style='height: 36em;'>
						<p>Orange Wolves</p>
                    </div>
                    <div class="col-9">
                        <div class="row">
							<a href="bus-1"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 1</p>
							</div></a>
							<a href="bus-2"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 2</p>
							</div></a>
							<a href="bus-3"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 4</p>
                            </div></a>
                        </div>
                        <div class="row">
							<a href="bus-4"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 4</p>
                            </div></a>
                            <a href="bus-5"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 5</p>
							</div></a>
							<a href="bus-6"><div class="col-4 busPortal" style='height: 18em;'>
                            <p>Bus 6</p>
                            </div></a>
                        </div>
                    </div>
                </div><!--End Row-->
                <div class="row">
                    <div class="col-6">
                        <div class="row busPortal" style='height: 14em;'>
                            <p>Video</p></p>
                        </div>
                        <div class="row">
                            <div class="col-4 busPortal" style='height: 5.5em;'>
                                <p>Video 1</p></p>
                            </div>
                            <div class="col-4 busPortal" style='height: 5.5em;'>
                                <p>Video 2</p></p>
                            </div>
                            <div class="col-4 busPortal" style='height: 5.5em;'>
                                <p>Video 3</p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 busText" style='height: 19.5em;'>
                        <p>Flavour Text 1, Flavour Text 2,Flavour Text 3,Flavour Text 4,Flavour Text 5,Flavour Text 6,Flavour Text 7,Flavour Text 8,Flavour Text 9</p></p>
                    </div>
                </div>
			    

<!-----------------------------FOOTER------------------------------>
				
				<div class="row">
					<footer>
						<?php include("../resources/layout/footer.html"); ?>
					</footer>
				</div>


			</div>
		</div>
	</body>
</html>
