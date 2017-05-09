<?php
	/* Grundprinzip im PHP
	1. Daten empfabngen von AJAX
	2. Mit Daten etwas tun (z.B. DB-Zugriff)
	3. Ergebnis an AJAX senden
	*/


  $Dozent ="Bock";
  $Tage = "6";
  $Text = "loremipsumloremipsum";
  $infoFreimodul = $_GET['infoFreimodul'];	// 1. Parameter empfangen von AJAX


								// 2. Mit Daten etwas tun
  //$output  = "<img src='";
  $output .= $Dozent;
  $output .= $Tage;
  $output .= $Text;
  $output .= $image_extension;


  echo $output;	// 3. Ergebnis enden nach AJAX
?>
