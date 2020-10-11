var elm = document.querySelector("#top-menu");
var ms = new MenuSpy(elm, {
  menuItemSelector: 'a[href^="#"]',
  activeClass: "active",
  threshold: 0,
  enableLocationHash: true,
  hashTimeout: 600,
});

jQuery(function () {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
});

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("top-menu").style.top = "0";
  } else {
    document.getElementById("top-menu").style.top = "-170px";
  }
  prevScrollpos = currentScrollPos;
};
