<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/freimodulwahl.css">

</head>
<body>

<div>
<h2>Dropdowns</h2>
<form id="radio1">
  <label>
    <fieldset>
<div id="field00">
      <input type="radio" class="rad" id="1nA" name="Fach" value="0">
      <label for="1nA">Keine Auswahl</label><br></div>
<div id="field01">
      <input type="radio" class="rad" id="1f1" name="Fach" value="1">
      <label for="1f1"> Fach 1</label><br></div>
<div id="field02">
      <input type="radio" class="rad" id="1f2" name="Fach" value="2">
      <label for="1f2"> Fach 2</label><br></div>
<div id="field03">
      <input type="radio" class="rad" id="1f3" name="Fach" value="3">
      <label for="1f3"> Fach 3</label></div>
  </fieldset>
</label>
</form>

<script>
var selected = []

$("#radio1").change(function() {

for (i = 0; i<4; i++){
  var n = "#field0"+i;
  var m = $(n).find(".rad").is(":checked");
  if (m){
      $(n).css("font-weight", "600");}

  else if (m==false){
    $(n).css("font-weight", "100");}
 };
});

</script>
</body>
</html>
