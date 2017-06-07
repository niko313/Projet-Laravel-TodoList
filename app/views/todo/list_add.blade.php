<?php

$error = "";

if (isset($_SERVER['HTTP_REFERER'])){
    $url = $_SERVER['HTTP_REFERER'];
}
else{
    $url = "/";
}

?>
<link rel="stylesheet" type="text/css" href={{ asset("css/list_add.css") }}>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="css/img/list.png" type="image/png">
<head>
    <title>ajouter une tache </title>
</head>

<body>
<!--<div class="container" id="contact-form">
    <div class="col-md-12"id="formadd">
        <div class="form-area">
            <form role="form" id="field-form" method="post">
                <br style="clear:both">
                <h3 style="margin-bottom: 25px; text-align: center;">Ajout de taches:</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="tasks" name="tasks" placeholder="tasks" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" type="textarea" id="commentaires" name="commentaires" placeholder="Commentaires" maxlength="500" rows="7">{{ Input::old('message') }}</textarea>
                    <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                </div>

                <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
                <button type="submit"  class="btn btn-primary pull-right"style="margin-bottom:15px;">Ajouter</button>
            </form>
        </div>
        <div class="agileits-bottom">
          <form  method="post"role="form" id="field-form">
            <input type="submit" value="Ajouter">
          </form>
        </div>
    </div>
</div>-->
<div class="main">
  <div class="login-form" id="contact-form">
    <h2>Ajouter Une Tache : </h2>
    <div class="agileits-top">
      <form method="post"role="form" id="field-form">
        <div class="styled-input">
          <input type="text" id="tasks" name="tasks"  required>
          <label>Tache : </label>
          <span></span>
        </div>
        <div class="styled-input">
          <input type="text" id="commentaires" name="commentaires" required>
          <label>Commentaire : </label>
          <span></span>
        </div>
        <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
    </div>
    <div class="agileits-bottom">
        <input type="submit" value="Ajouter">
      </form>
    </div>
  </div>
</div>
<footer class="text-center navbar-fixed-bottom">
  <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
</footer>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
