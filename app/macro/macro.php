<?php
HTML::macro('todoview', function($data){
  ob_start();
  ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <div id="todoapp">
      <div class="container">
          <div class="row">
              <div class="page-header">
                  <h1>Todo List
                      <small>Enough TODO for the rest of your life</small>
                  </h1>
              </div>
          </div>

          <div class="row">
              <div id="create-todo" class="well">
                  <input id="new-todo" placeholder="quels taches doit etre fait ? " type="text" class="span8" style="width:100%; height:100%" />
                  <span class="ui-tooltip-top help-inline" style="display:none;">Appuyer sur Entrer pour sauvegarde votre tache</span>
              </div>
          </div>

          <div class="row">
              <div id="mark-all-done"></div>
          </div>

          <div class="row">
              <table id="todos" class="table table-bordered table-striped">
                  <tbody id="todo-list"></tbody>
              </table>
          </div>

          <div class="row">
              <div id="todo-stats"></div>
          </div>
      </div>
  </div>
  <?php
    $ret =ob_get_clean();
    return $ret;

});

HTML::macro('todolistview', function($data){
    ob_start();
    ?>
    <?php
    $color = "#404040";

    foreach ($data as $tasks) {

        ?>

        <tr>
            <td> <?= $tasks->tasks?> </td>
            <td> <?= $tasks->commentaires?> </td>
            <td>
                <?php
                if ($tasks->fait == 0){
                    echo "<span class=\"badge \" id=\"danger\">NON FAIT</span>";
                }
                elseif ($tasks->fait == 1){
                    echo "<span class=\"badge\" id=\"success\">FAIT</span>";

                }
                ?>
            </td>
            <td>
                <form method="get" action="list_modify/<?= $tasks->id ?>" style="display: inline-block">
                    <button type="submit" class="btn btn-primary">MODIFIER</button>
                </form>
            </td>
            <td>
                <form method="post" action="list_delete/<?= $tasks->id ?>" style="display: inline-block">
                    <button type="submit" class="btn btn-primary">SUPPRIMER</button>
                </form>
            </td>
            <td>
                <?php
                  if($tasks->fait == true){?>
                      <form method="post" action="notdone/<?= $tasks->id ?>" style="display: inline-block">
                            <button type="submit" class="btn btn-primary">NON FAIT</button>
                      </form>
                  <?php
                  }
                  elseif($tasks->fait == false){?>
                      <form method="post" action="done/<?= $tasks->id ?>" style="display: inline-block">
                          <button type="submit" class="btn btn-primary">FAIT</button>
                      </form>
                  <?php
                  }
                ?>
            </td>
        </tr>
        <?php
    }

    $ret = ob_get_clean();

    return $ret;
});

HTML::macro('todolistmodify', function($tasks, $url){
    ob_start();
    ?>

        <!--<div class="container" id="contact-form">
            <div class="col-md-12"id="formadd">
                <div class="form-area">
                    <form role="form" id="field-form" method="post">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Modification de taches:</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="tasks" name="tasks" placeholder="tasks" value="<?= $tasks->tasks ?>" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" type="textarea" id="commentaires" name="commentaires" placeholder="Commentaires" maxlength="500" rows="7"><?= $tasks->commentaires ?></textarea>
                            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                        </div>

                        <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
                        <button type="submit"  class="btn btn-primary pull-right"style="margin-bottom:16px;">Modifier</button>
                    </form>
                </div>
            </div>
        </div>-->
        <div class="main">
          <div class="login-form" id="contact-form">
            <h2>Modifier Une Tache : </h2>
            <div class="agileits-top">
              <form method="post"role="form" id="field-form">
                <div class="styled-input form-group">
                  <input type="text" id="tasks" name="tasks" value="<?= $tasks->commentaires ?>"  required>
                  <label>Tache : </label>
                  <span></span>
                </div>
                <div class="styled-input">
                  <input type="text" id="commentaires" name="commentaires"value="<?= $tasks->commentaires ?>" >
                  <label>commentaire : </label>
                  <span></span>
                </div>
                <a href="<?= $url ?>" id="submit" class="btn btn-primary pull-left">Retour</a>
            </div>
            <div class="agileits-bottom">

                <input type="submit" value="Modifier">
              </form>
            </div>
          </div>
        </div>
        <footer class="text-center navbar-fixed-bottom">
          <p>Site réaliser par <b>VAISSIERE Nicolas</b> ,<a href="https://www.ingesup.com/campus/toulouse/" data-toggle="tooltip" title="Ingesup"> étudiant d'Ynov Ingesup</a></p>
        </footer>


        <?php

    $ret = ob_get_clean();

    return $ret;
});
