<?php
session_start();
  $user = 'Max Muster';

require_once('system/data.php');
require_once('system/security.php');

?>







<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die drei vorausgehenden meta-Tags *müssen* vor allen anderen Inhalten des head stehen -->
    <title>Freimodul Wahl</title>
    <!-- Bootstrap Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- eigene Styles -->
    <link rel="stylesheet" href="css/freimodulwahl.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="panel panel-default uebertitel"> <!-- Übertitel Panel -->
            <div class="panel-heading">
              <h2 class="panel-title">Anmeldung Freimodule</h2>
            </div>
            <div class="panel-body">
              Hallo <?php echo $user ?>, bitte Wähle deine Freimodule für das nächste Semester aus. Du kannst insgesamt zwei Module besuchen. Es kann jeweils nur ein Modul pro Gruppe Ausgewählt werden.
            </div>
          </div>
          <form method="post" role="form"> <!-- Formularbeignn -->
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="überschriftEins">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEins" aria-expanded="true" aria-controls"collapseEins">
                      Gruppe 1
                    </a>
                  </h4>
                </div>
                <div id="collapseEins" class="panel-collapse collapse" role="tabpanel" aria-labelledby="überschriftEins">
                  <div class="panel-body">
                    Radio Button 1 <br>
                    Radio Button 2 <br>
                    Radio Button 3 <br>
                    Radio Button 4 <br>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="überschriftZwei">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZwei" aria-expanded="false" aria-controls"collapseZwei">
                      Gruppe 2
                    </a>
                  </h4>
                </div>
                <div id="collapseZwei" class="panel-collapse collapse" role="tabpanel" aria-labelledby="überschriftZwei">
                  <div class="panel-body">
                    Radio Button 1 <br>
                    Radio Button 2 <br>
                    Radio Button 3 <br>
                    Radio Button 4 <br>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="überschriftDrei">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseDrei" aria-expanded="false" aria-controls"collapseDrei">
                      Gruppe 3
                    </a>
                  </h4>
                </div>
                <div id="collapseDrei" class="panel-collapse collapse" role="tabpanel" aria-labelledby="überschriftDrei">
                  <div class="panel-body">
                    Radio Button 1 <br>
                    Radio Button 2 <br>
                    Radio Button 3 <br>
                    Radio Button 4 <br>
                  </div>
                </div>
              </div>
            </div>
          </form> <!-- Formular Ende -->
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript-Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
