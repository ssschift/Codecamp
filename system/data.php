<?php

  function get_db_connection()
  {
    $db = mysqli_connect('localhost', '155425_5_1', 'PKGsgz3Bv8mH', '155425_5_1')
      or die('Fehler beim Verbinden mit dem Datenbank-Server.');
    mysqli_set_charset($db, "utf8");
    return $db;
  }
  ?>
