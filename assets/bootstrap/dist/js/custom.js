$(document).ready(function(){
  $("#carijeniskomputer").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbody-jkomputer tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $("#carikomputer").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#tbody-komputer tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

    $("#printjkomputer").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });

    $("#printkomputer").click(function(){
        var mode = 'iframe'; //popup
        var close = mode == "popup";
        var options = { mode : mode, popClose : close};
        $("div.printableArea").printArea( options );
    });
});