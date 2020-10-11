jQuery(function () {
  var accordion = $("#accordionUrnas");

  accordion.collapse();

  accordion.on("hidden.bs.collapse", function () {
    console.log("hidden");
    // $(this).find(".fa-plus");
  });

  accordion.on("show.bs.collapse", function () {
    console.log("show", $(this));
    // $(this).find(".fa-minus");
  });
});
