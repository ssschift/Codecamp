$(document).ready(function() {

  var infoFreimodul = 1;

  $("#infoButton").click(function() {

    $.ajax({
      // method: "GET",				// type auch ok
      url: "Test2/infomodul.php",	// Aufruf externer Datei
      data: {infoFreimodul: modulName},	// Übergeben Parameter an PHP
      dataType: "text",
      success: function (output) {	// empfangen von PHP
        imageCounter = imageCounter + 1;
        $('.images').append(output);
      }
    }); // Ajax

  }); // Click Button

}); // Document Ready
