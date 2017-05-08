<?php

  function get_db_connection()
  {
    $db = mysqli_connect('localhost', '155425_5_1', 'PKGsgz3Bv8mH', '155425_5_1')
      or die('Fehler beim Verbinden mit dem Datenbank-Server.');
    mysqli_set_charset($db, "utf8");
    return $db;
  }

  function get_result($sql)
    {
      $db = get_db_connection();
      // echo $sql;
      $result = mysqli_query($db, $sql);
      mysqli_close($db);
      return $result;
    }

    function get_id_result($sql)
    {
      $db = get_db_connection();
      // echo $sql;
      mysqli_query($db, $sql);
      $result = mysqli_insert_id($db);
      mysqli_close($db);
      return $result;
    }


    function get_modul($freimodul_id)
    //Abfrage für gewählte Freimodule;
{
  $sql = "SELECT *
          FROM freimodule
          WHERE (`freimodule`.`freimodul_id` = 2)
          ORDER BY `freimodule`.`freimodul_id` ASC";
  return get_result($sql);
}




  ?>
