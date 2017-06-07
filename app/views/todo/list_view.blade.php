<?php

    if (isset($_SERVER['HTTP_REFERER'])){
        $url = $_SERVER['HTTP_REFERER'];
    }
    else{
        $url = "/";
    }

    $data = DB::table('tasks')->get();

?>
<link rel="stylesheet" type="text/css" href={{ asset("css/list_view.css") }}>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="icon" href="css/img/list.png" type="image/png">
<head>
    <title>liste des taches</title>
</head>

<body>
<div class="container" id="contact-form">
    <div class="col-md-12"style="margin-top: 80px;">
        <div class="form-area">
            <h3 style="margin-bottom: 25px; text-align: center;">Liste des taches : </h3>
            <div class="panel panel-default"id="panel">
                <table class="table"id="table">
                    <thead>
                    <tr>
                        <th>Tache :</th>
                        <th>Commentaire :</th>
                        <th>Status :</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    <tbody>
                    {{ HTML::todolistview($data) }}
                    </tbody>
                </table>
            </div>
            <a href="acceuil" id="submit" class="btn btn-primary pull-left" style="margin-left: 40px;margin-right: 15px;">Retour</a>
            <form method="get" action="list_add" style="display: inline-block">
                <button type="submit" class="btn btn-primary">AJOUTER</button>
            </form>
        </div>
    </div>
</div>
<footer class="text-center navbar-fixed-bottom">
  <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
</footer>
</body>


<br>
