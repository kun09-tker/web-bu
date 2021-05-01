<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/base.css?v=<?php echo time() ?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time() ?>">
    <link rel="shortcut icon" href="fav.ico">
    <title>Touch Type Training</title>
</head>

<body>
    <div id="ttt-root">
        <div id="play-box"></div>
        <div id="control-panel"></div>
        <br class="clear" />
    </div>
</body>
<script type="text/javascript" src="js/jquery-1.7.1.min.js?v=<?php echo time() ?>"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js?v=<?php echo time() ?>"></script>
<script type="text/javascript" src="js/word.js?v=<?php echo time() ?>"></script>
<script type="text/javascript" src="js/index.js?v=<?php echo time() ?>"></script>
<script type="text/javascript">
    var isMobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
    if (isMobile) {
        $(function() {
            $('<div/>').text('Sorry! You need a PC to play this game.')
                .attr('id', 'no-support-message')
                .appendTo('body');
        })
    }
</script>

</html>