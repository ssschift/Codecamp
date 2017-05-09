<?php
require_once('data.php');

$mod_id = $_GET['mi'];

$result = get_modul_info($mod_id);


$modul = mysqli_fetch_assoc($result);
echo $modul["Dozent"] . "<br />";

 ?>
