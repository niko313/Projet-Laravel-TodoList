<?php

    $error = "";

    if (isset($_SERVER['HTTP_REFERER'])){
        $url = $_SERVER['HTTP_REFERER'];
    }
    else{
        $url = "/acceuil";
    }

?>
<link rel="stylesheet" type="text/css" href={{ asset("/css/list_add.css") }}>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="css/img/list.png" type="image/png">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<head>
    <title>Connexion</title>
</head>

<body>
  <!--<div class="container" id="contact-form">
        <div class="col-md-12" id="formadd">
            <div class="form-area">
                <form role="form" id="field-form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Connexion :</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="motdepasse" name="pseudo" placeholder="Mot de passe" required>
                    </div>
                    <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
                    <button type="submit"  class="btn btn-primary pull-right">Connexion</button>
                </form>
            </div>
        </div>
    </div>-->
	<div class="main">
		<div class="login-form">
			<h2>Se Connecter</h2>
			<div class="agileits-top">
				<form role="form" id="field-form" method="post">
					<div class="styled-input">
            <input type="text"  id="pseudo" name="pseudo" required>
						<label>Pseudo : </label>
						<span></span>
					</div>
					<div class="styled-input">
            <input type="password" id="motdepasse" name="motdepasse" required>
						<label>Mot De Passe : </label>
						<span></span>
					</div>
          <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>

			</div>
			<div class="agileits-bottom">
				
					<input type="submit" value="Se Connecter">
				</form>
			</div>
		</div>
	</div>
    <footer class="text-center navbar-fixed-bottom">
      <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
    </footer>

</body>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
