<?php
	$module = (isset($_GET['mod']) && $_GET['mod'] != '') ? $_GET['mod'] : '';
	$act = (isset($_GET['act']) && $_GET['act'] != '') ? $_GET['act'] : '';
	$sub = (isset($_GET['sub']) && $_GET['sub'] != '') ? $_GET['sub'] : '';
?>
<html>
	<head>
		<title>John Altair L. Gensola</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta charset="utf-8" />
		<link rel="icon" href="css/images/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" href="css/images/favicon.ico" type="image/x-icon">
		<link href="js/sliderho/jquery.bxslider.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/style-index.css" media="screen" />
		<script src="js/sliderho/jquery.min.js"></script>
		<script src="js/sliderho/jquery.bxslider.min.js"></script>		
		<script>
			function myFunction() {
				var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " responsive";
				} else {
					x.className = "topnav";
				}
			}
		</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="header-cont">
				<a href="index.php?mod=home"><div id="header-img"></div></a>
				<ul class="topnav" id="myTopnav">
					<li><a href="index.php?mod=home"><div id="home">Home</div></a></li>
					<li class="portfolio"><a href="index.php?mod=portfolio"><div id="portfolio">Portfolio</div></a></li>
					<li class="about"><a href="index.php?mod=about"><div id="about">About</div></a></li>	
					<li class="contact"><a href="index.php?mod=contact"><div id="contact">Contact</div></a></li>	
					<li class="icon"><a href="javascript:void(0);" onclick="myFunction()"><div id="menu"></div></a></li>
				</ul>				
			</div>			
			<div id="content">
				<?php
					switch($module){
					case 'home':
						require_once 'main.php';
						exit;
					case 'portfolio':
						require_once 'portfolio/index.php';
						exit;
					case 'about':
						require_once 'about.php';
						exit;
					case 'contact':
						require_once 'contact.php';
						exit;
					case 'contact2':
						require_once 'contact2.php';
						exit;
					default:
						require_once 'main.php';
					}
				?>
			</div>
		</div>
	</body>
</html>