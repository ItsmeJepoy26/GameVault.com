$(document).on(
  {
    mouseenter: function() {
      var $this = $(this);
      var src = $this.data("video-src");
      $this.find(".loader-wrapper").css("display", "flex");
      let video = $this.find("video")[0];
      video.setAttribute("src", src);
      video.oncanplay = function() {
        $this.find(".loader-wrapper").hide();
      };
      video.load();
      video.play().catch(function(e) {});
      video.currentTime = 15;
    },
    mouseleave: function() {
      var $this = $(this);
      let video = $(this).find("video")[0];
      video.pause();
      video.removeAttribute("src"); // empty source
      video.load();
      $this.find(".loader-wrapper").hide();
    }
  },
  ".video-card"
);
