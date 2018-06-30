

  <script>
    $(document).pjax('a', '#pjax-container' );

    /* Open when someone clicks on the span element */
    function openNav() {
      $("body").addClass("navOpen");
      $("#navOverlay").fadeIn("slow");

      $(".close svg").addClass("fadeIn");

      $(".overlay-content").removeClass("fadeOut");
      $(".overlay-content a").addClass("fadeIn");

      $(".overlay-top").removeClass("fadeOut");
      $(".overlay-bottom").removeClass("fadeOut");

      $(".overlay-left").removeClass("fadeOutLeft");
      $(".overlay-right").removeClass("fadeOutRight");

      $(".overlay-top").addClass("fadeIn");
      $(".overlay-bottom").addClass("fadeIn");

      $(".overlay-left").addClass("fadeInLeft");
      $(".overlay-right").addClass("fadeInRight");
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
      $("body").removeClass("navOpen");
      $("#navOverlay").fadeOut("slow");

      $(".close svg").removeClass("fadeIn");

      $(".overlay-content a").removeClass("fadeIn");
      $(".overlay-content").addClass("fadeOut");

      $(".overlay-top").removeClass("fadeIn");
      $(".overlay-bottom").removeClass("fadeIn");

      $(".overlay-left").removeClass("fadeInLeft");
      $(".overlay-right").removeClass("fadeInRight");

      $(".overlay-top").addClass("fadeOut");
      $(".overlay-bottom").addClass("fadeOut");

      $(".overlay-left").addClass("fadeOutLeft");
      $(".overlay-right").addClass("fadeOutRight");

      $(".overlay-bottom").css("opacity", "0%");
      $(".overlay-top").css("opacity", "0%");

    }

    $('a').click(function(){
      $("#navOverlay").fadeOut("slow");
      $(".overlay-content a").removeClass("fadeIn");
      $(".overlay-content").addClass("fadeOut");

      $(".overlay-top").removeClass("fadeIn");
      $(".overlay-bottom").removeClass("fadeIn");

      $(".overlay-left").removeClass("fadeInLeft");
      $(".overlay-right").removeClass("fadeInRight");

      $(".overlay-top").addClass("fadeOut");
      $(".overlay-bottom").addClass("fadeOut");

      $(".overlay-left").addClass("fadeOutLeft");
      $(".overlay-right").addClass("fadeOutRight");

      $(".overlay-bottom").css("opacity", "0%");
      $(".overlay-top").css("opacity", "0%");

    });
    </script>
  </body>
</html>
