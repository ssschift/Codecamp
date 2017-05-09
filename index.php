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
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> <!-- Accordion Anfang -->
              <!--Gruppe 1 -->
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
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeEins" id="info1" value="option1_1">
                        Filmisches Erzählen
                      </label> <a class="mod_info"  data-modid="1"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeEins" id="info2" value="option1_2">
                        Design Thinking
                      </label> <a class="mod_info"  data-modid="2"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeEins" id="info3" value="option1_3">
                        Live Kommunikation
                      </label><a class="mod_info"  data-modid="3"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeEins" id="info10" value="option1_4">
                        Keine Auswahl
                      </label><a class="mod_info"  data-modid="10"><span class="glyphicon glyphicon-flag" aria-hidden="true"></span></a>
                    </div>
                    <br>
                    <section id="content_gr1">
                      <h5>Dozent</h5>
                      <h5>Tage</h5> 6
                      <h5>Text</h5> asölkdfjasöldkjf
                    </section>
                  </div> <!-- Panelbody fertig -->
                </div>
              </div>
              <!--Gruppe 2 -->
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
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeZwei" id="4" value="option2_1">
                        Web der Dinge
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeZwei" id="5" value="option2_2">
                        Postproduction
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeZwei" id="6" value="option2_3">
                        Markenführung
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeZwei" id="11" value="option2_4">
                        Keine Auswahl
                      </label>
                    </div>
                  </div> <!-- Panelbody fertig -->
                </div>
              </div>
              <!--Gruppe 3 -->
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
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeDrei" id="7" value="option3_1">
                        Make it Sound
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeDrei" id="8" value="option3_2">
                        Journalismus
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeDrei" id="9" value="option3_3">
                        Social Media
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="GruppeDrei" id="12" value="option3_4">
                        Keine Auswahl
                      </label>
                    </div>
                  </div> <!-- Panelbody fertig -->
                </div>
              </div>
              <!--Gruppe 4 - Abschicken des Formualrs -->
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="überschriftVier">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" type="submit" data-parent="#accordion" href="#collapseVier" aria-expanded="false" aria-controls"collapseDrei">
                      Bestätigen
                    </a>
                  </h4>
                </div>
              </div>
            </div> <!-- Accordion Ende -->
          </form> <!-- Formular Ende -->
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- JavaScript-Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(".mod_info").click(function(){
      //  console.log($(this).attr("data-modid"));
        mod_id = $(this).attr("data-modid");

        $.ajax({
          method: "GET",
          url : "system/ajax_mod_info.php",
          data : {mi : mod_id},
          dataType : "html",
          success : function(mod_info){
            $("#content_gr1").html(mod_info)
          }
        })
      })
    </script>
  </body>
</html>
