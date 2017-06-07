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
<head>
    <title>S'inscrire</title>
</head>
<body>
    <!--<div class="container" id="contact-form">
        <div class="col-md-12"id="formadd">
            <div class="form-area">
                <form role="form" id="field-form" method="post">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Inscription :</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Prenom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="Mot de passe" required>
                    </div>
                    <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
                    <button type="submit"  class="btn btn-primary pull-right"style="margin-bottom:15px;">Validé</button>
                </form>
            </div>
        </div>
    </div>-->
    <div class="main">
  		<div class="login-form">
  			<h2>INSCRIPTION</h2>
  			<div class="agileits-top">
  				<form method="post">
            <div class="styled-input">
              <input type="text"  id="firstname" name="firstname" required>
  						<label>Nom : </label>
  						<span></span>
  					</div>
            <div class="styled-input">
              <input type="text"  id="lastname" name="lastname" required>
  						<label>Prenom : </label>
  						<span></span>
  					</div>
            <div class="styled-input">
              <input type="text"  id="email" name="email" required>
  						<label>E-Mail : </label>
  						<span></span>
  					</div>
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
  				
  					<input type="submit" value="S'inscrire'">
  				</form>
  			</div>
  		</div>
  	</div>
    <footer class="text-center navbar-fixed-bottom">
      <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
    </footer>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
