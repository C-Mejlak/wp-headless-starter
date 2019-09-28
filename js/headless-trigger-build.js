jQuery(document).ready(
  (function($) {
    // event handler for clicking the link button
    $("#publish, #original_publish").on("click", function(e) {
      $.ajax({
        type: "POST",
        url: headlessTriggerBuildVars,
        success: function(r) {
          console.log(r);
        }
      });
    });
  })(jQuery)
);
