<?php
	$viewName="index";
	if(isset($_GET['v'])){
		$view=urlencode($_GET['v']);
		$viewPath='view/'.$view.".php";	
		if (preg_match('/[^A-Za-z0-9]/', $view) || !file_exists($viewPath)){
			$viewPath='view/index.php';
		}else{
			$viewName=strtolower($view);
		}
	}else{
		$viewPath='view/index.php';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gorilla Warfare</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
	</head>
	<body style="background-image: url(' img/ignasi_pattern_s.png')">
		<div class="container">
			<div class="innercontainer">
				<nav class="navbar navbar-default navbar-fixed-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>
							<a style="padding-right:5px" ui-sref="index" href="index.php">
								<img src="img/logo.png">
							</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li <?= $viewName==='index'?'class="active"':''; ?>>
									<a href="?v=index">
										<span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home
									</a>
								</li>
								<li <?= $viewName==='join'?'class="active"':''; ?>>
									<a href="?v=join">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Join
									</a>
								</li>
								<li <?= $viewName==='faq'?'class="active"':''; ?>>
									<a href="?v=faq">
										<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> FAQ
									</a>
								</li>
								<li <?= $viewName==='members'?'class="active"':''; ?>>
									<a href="?v=members">
										<span class="glyphicon glyphicon-user" aria-hidden="true"></span> Members
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<br><br>
				<?php 
					include($viewPath);
				?>
				<noscript>
					Turn on JavaScript ye silly bloke
				</noscript>
			</div>
			<br>
		</div>
		<br><br>
		<div class="footer">
			<marquee behavior="scroll" direction="left">RIP Harambe</marquee>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>
