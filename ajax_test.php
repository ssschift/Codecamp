<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#button1").click(function(){
        $.get("ajax_test2.html", function(data, status){
          $("#hello").html(data);

        });
    });
});

$("#button2").click(function(){
      $.post("demo.asp",
      {
        name: "Rebecca",
        city: "Twann"
      },
      function(data, status){
        alert("Data " + data);
      });
});


</script>
</head>
<body>
  <div id="hello"></div>

<button id="button1">Button1</button>
<button id="button2">Button2</button>

</body>
</html>
