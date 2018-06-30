

  <script>
    $(document).pjax('a', '#pjax-container' );

    /* Open when someone clicks on the span element */
    function openNav() {
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

      $("body").toggleClass(".navOpen");
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
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
      $("body").toggleClass(".navOpen");
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
      $("body").toggleClass(".navOpen");
    });

    function hoverdefault() {
      $("#overlay-bg-default").css("opacity", "1");
      $("#overlay-bg-default").siblings().css("opacity", "0");
    }

    function hoverpacific() {
      $("#overlay-bg-pacific").css("opacity", 1);
      $("#overlay-bg-pacific").siblings().css("opacity", "0");
    }

    function hoverabout() {
      $("#overlay-bg-about").css("opacity", 1);
      $("#overlay-bg-about").siblings().css("opacity", "0");
    }

    function hovercommittees() {
      $("#overlay-bgimg").attr("src", "https://spotthezombiemanitoba.com/wp-content/uploads/2017/03/Modern-House.jpg");
    }

    function hoverconference() {
      $("#overlay-bgimg").attr("src", "http://alternativealexandriawaterfrontplan.com/wp-content/uploads/traditional-contemporary-modest-modern-homes-new-home_168912.jpg");

    }

    function hoverregistration() {
      $("#overlay-bgimg").attr("src", "https://staticshare.america.gov/uploads/2017/04/AP_99050702044.jpg");
    }
    </script>
  </body>
</html>
