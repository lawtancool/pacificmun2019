<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - home page</title>

<?php
  include "header.php";
?>

      <header>
        <div class="bars" onclick="openNav();">
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <h2>PACIFICMUN</h2><h3>MMXIX</h3>
        <img class="logo" src="logo.svg" alt="logo" />
      </header>

      <aside>
        <div class="sideNav" id="menu">
          <div onclick="$.fn.fullpage.moveTo('home',0);" class="sideNav-bar"> <div class="actualbar" id="bar1"></div> </div>
          <div onclick="$.fn.fullpage.moveTo('letter',0);" class="sideNav-bar"> <div class="actualbar" id="bar2"></div> </div>
          <div onclick="$.fn.fullpage.moveTo('about',0);" class="sideNav-bar"> <div class="actualbar" id="bar3"></div> </div>
          <div onclick="$.fn.fullpage.moveTo('links',0);" class="sideNav-bar"> <div class="actualbar" id="bar4"></div> </div>
        </div>
      </aside>

      <main id="pjax-container">
        <div id="fullpage">
          <div class="section" data-anchor="slide1">Section 1</div>
          <div class="section" data-anchor="slide2">Section 2</div>
          <div class="section" data-anchor="slide3">Section 3</div>
          <div class="section" data-anchor="slide4">Section 4</div>
        </div>
      </main>

      <script type="text/javascript">
        $('#fullpage').fullpage({
          sectionsColor: ['#303030', '#0C75C7', '#0739A6 ', '#BDDEF5'],
        	anchors:['home', 'letter', 'about', 'links'],

          afterLoad: function(anchorLink) {
            var loadedSection = this;

            if(anchorLink == 'home'){
        			$("#bar1").css("width", "80px");
        		}
          }
        });
      </script>

<?php
  include "footer.php";
?>
