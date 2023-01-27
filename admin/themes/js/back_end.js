$(document).ready(function() {
  "use strict";
  $("input[type='file']").wrap('<div class="custome_div"></div>');
  $(".custome_div").prepend("<span> Upload Image </span>");
  $(".custome_div").append("<i class='fa fa-upload'></i>");

  $("input[type='file']").change(function() {
    $(this)
      .prev("span")
      .text($(this).val());
  });

   // START CONFIRM MESSAGE
  $(".confirm").click(function() {
    return confirm("Are You Sure Delete This Record");
  });
  // END CONFIRM MESSAGE

});