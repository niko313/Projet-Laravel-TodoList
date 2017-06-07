<?php

    if (isset($_SERVER['HTTP_REFERER'])){
        $url = $_SERVER['HTTP_REFERER'];
    }
    else{
        $url = "/";
    }
?>
<link rel="stylesheet" type="text/css" href={{ asset("css/404.css") }}>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="css/img/list.png" type="image/png">
<head><title>404</title>
</head>
<body>
<div class="content">
  <object type="application/x-shockwave-flash" name="name" data="swf/pacman.swf" id="flash-404" style="visibility: visible;" width="977" height="500"><param name="quality" value="high"><param name="wmode" value="transparent"></object>
</div>
<div id="main">
    <a href="acceuil" class="btn" role="button" aria-pressed="true">Acceuil</a>
</div>
<footer class="text-center navbar-fixed-bottom">
  <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
</footer>
</body>
