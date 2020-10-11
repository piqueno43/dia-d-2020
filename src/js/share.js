jQuery(function () {
  var socialButton = $(".socialBox");
  socialButton.each(function () {
    var $self = $(this);
    $self.on("click focus", function () {
      var self = $(this);
      var element = self.find(".btn");
      var c = 0;

      if (self.hasClass("animate")) {
        return;
      }

      if (!self.hasClass("open")) {
        self.addClass("open");
        var icon = self.find(".fa");

        icon.removeClass("fa-share-alt");
        icon.addClass("fa-close");

        TweenMax.staggerTo(
          element,
          0.3,
          {
            opacity: 1,
            visibility: "visible",
          },
          0.075
        );
        TweenMax.staggerTo(
          element,
          0.3,
          {
            top: -12,
            ease: Cubic.easeOut,
          },
          0.075
        );

        TweenMax.staggerTo(
          element,
          0.2,
          {
            top: 0,
            delay: 0.1,
            ease: Cubic.easeOut,
            onComplete: function () {
              c++;
              if (c >= element.length) {
                self.removeClass("animate");
              }
            },
          },
          0.075
        );

        self.addClass("animate");
      } else {
        var icon = self.find(".fa");
        icon.removeClass("fa-close");
        icon.addClass("fa-share-alt");
        TweenMax.staggerTo(
          element,
          0.3,
          {
            opacity: 0,
            onComplete: function () {
              c++;
              if (c >= element.length) {
                self.removeClass("open animate");
                element.css("visibility", "hidden");
              }
            },
          },
          0.075
        );
      }
    });
  });
});

jQuery(window).on("load", function () {
  var clipboard = new ClipboardJS(".sharing-clipboard");

  $("#btnGroupShare").on("click", function () {
    $(".message").show().text("link copiado!");

    clipboard.destroy();

    setTimeout(function () {
      $(".message").hide();
    }, 2000);
  });
});

new ClipboardJS(".sharing-clipboard");
