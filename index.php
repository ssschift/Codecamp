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
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="panel panel-default uebertitel">
          <div class="panel-heading">
            <h2 class="panel-title">Anmeldung Freimodule</h2>
          </div>
          <div class="panel-body">
            Hallo <?php echo $user ?>, bitte Wähle deine Freimodule für das nächste Semester aus. Du kannst insgesamt zwei Module besuchen. Es kann jeweils nur ein Modul pro Gruppe Ausgewählt werden.
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
