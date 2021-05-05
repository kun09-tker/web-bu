<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Word Pluck</title>
	<link href="style.css?v=<?php echo time() ?>" rel="stylesheet" type="text/css" />
	<script src="js/create.js?v=<?php echo time() ?>"></script>
	<script src="js/words.js?v=<?php echo time() ?>"></script>
	<script src="js/main.js?v=<?php echo time() ?>"></script>
	<link rel="shortcut icon" href="images/water.png" type="image/png" />
	<meta property="og:image" content="images/thumb.jpg" />
</head>

<body>

	<canvas id="stage" width="500" height="500"></canvas>
	<h1 id="notice">Hello!</h1>

	<div class="container">
		<div id="controls">
			<h1 id="score"> </h1>
			<ul id="stats">
				<li class="level">
					<h1 id="level"> </h1><label>level</label>
				</li>
				<li class="words">
					<h1 id="words"> </h1><label>words</label>
				</li>
				<li class="accuracy">
					<h1 id="accuracy"> </h1><label>accuracy</label>
				</li>
				<li class="speed">
					<h1 id="speed"> </h1><label>words / min</label>
				</li>
				<li class="tips opt"><input type="checkbox" id="tips" /><label for="tips">Tips?</label></li>
				<li class="sound opt"><input type="checkbox" id="sound" checked="checked" /><label for="sound">Sound?</label></li>
			</ul>
		</div>

		<h3 id="tip"> </h3>

		<div id="start">
			<h2>Word Pluck &mdash; when it rains, start typing.</h3>
				<p>Pause / Un-pause the game by pressing the <strong>Space</strong> key.</p>
				<p>Enable <strong>Tips</strong>, to get a peek of the upcoming word (reduces scores slightly).</p>
				<p>Turn your speakers down a little! You can turn the sound on / off using the checkbox on the right.
				</p>
				<br />
				<p>
					<button id="btn-start">start</button>
					<br />
					<br>
					<button id="btn-start"><a href="../../html/trochoi.php" style="color:white;">Exit</a></button>
				</p>
		</div>
	</div>

</body>

</html>