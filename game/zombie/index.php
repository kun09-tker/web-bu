<!doctype html>
<html>

<head>
  <title>KILL ZOMBIE</title>
  <script src="js/game.js?v=<?php echo time() ?>"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css?v=<?php echo time() ?>" rel="stylesheet">
  <link href="css/style.css?v=<?php echo time() ?>" rel="stylesheet">
  <link rel="shortcut icon" href="./css/public/virus.png?v=<?php echo time() ?>">
</head>

<body>
  <div class="container">
    <div class="header">

      <button class="btn btn-success pull-right" id="start"><span class="glyphicon glyphicon-play"></span>
        Start</button>
      <button class="btn btn-info pull-right disabled" id="reset"><span class="glyphicon glyphicon-flash"></span>
        Reset</button>
      <a href="../../html/trochoi.php" class="btn btn-danger pull-right" id="Exit"><span class="glyphicon glyphicon-log-out"></span>
        Exit</a>
      <h3 class="text-muted">KILL ZOMBIE</h3>
      <hr>

    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <div id="box"><span id="message" class="hidden">Game Over!</span></div>
      </div>
      <div class="panel-footer"><strong>Score: <span id="score">0</span></strong></div>
    </div>
    <hr>
  </div>
</body>

</html>