<!DOCTYPE html>
<html>

<head>
	<title>ZType</title>
	<link rel="shortcut icon" href="media/favicon.png" type="image/png">
	<link rel="icon" href="media/favicon.png" type="image/png">
	<link rel="shortcut icon" href="./media/title/shipicon.png?v=<?php echo time() ?>">
	<style type="text/css">
		html,
		body {
			background-color: #000;
			background-image: url(media/background/page.png);
			color: #555;
			font-family: helvetica, arial, sans-serif;
			margin: 0;
			padding: 0;
			font-size: 10pt;
		}

		a {
			color: #777;
			text-decoration: none;
		}

		a:hover {
			color: #ccc;
		}

		#ztype-game-canvas {
			position: absolute;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			margin: auto;
			border: 0;
			z-index: 1000002;
			box-shadow: 0 0 30px #000;
		}

		body.mobile #ztype-byline {
			display: none;
		}

		body.mobile #ztype-gsense {
			display: none;
		}
	</style>
	<script type="text/javascript" src="ztype.js?v=<?php echo time() ?>" charset="UTF-8"></script>
	<script type="text/javascript" src="ztype-trainer.js?v=<?php echo time() ?>" charset="UTF-8"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
</head>

<body>
	<canvas id="ztype-game-canvas"></canvas>
</body>

</html>