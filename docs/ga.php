<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - general assemblies page</title>

<?php
  include "header.php";
?>

      <header>
        <div class="bars" onclick="openNav();">
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <h2>PACIFICMUN</h2><h3>Committees</h3>
        <img class="logo" src="logo.svg" alt="logo" />
      </header>

      <main id="pjax-container">
        <div id="fullpage">
          <div class="section">
            <div id="ga">
              <img src="#" alt="">
              <div class="ga-inner">
                <div class="ga-header">
                  <div class="bigtext">
                    General Assemblies
                  </div>
                  <div class="backandforthicons">
                    <svg height="40" width="30">
                  		<polyline points="15,10 3,20 15,30" stroke="#FFF" stroke-width="4" fill="none"/>
                    	<polyline points="3,20 25,20" stroke="#FFF" stroke-width="4" fill="none"/>
                    </svg>
                    <svg height="40" width="20">
                    	<polyline points="3,40 20,0" stroke="#FFF" stroke-width="2" fill="none"/>
                    </svg>
                    <svg height="40" width="30">
                    	<polyline points="15,10 28,20 15,30" stroke="#FFF" stroke-width="4" fill="none"/>
                    	<polyline points="3,20 25,20" stroke="#FFF" stroke-width="4" fill="none"/>
                    </svg>
                  </div>
                  <div class="liltext">
                    DISEC | ECOFIN | LEGAL
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="section fp-auto-height">
            <div class="grid">
              <div class="item">
                <a href="disec.php">
                  <div class="item-inner">
                    <img src="https://www.thefamouspeople.com/profiles/images/jesus-christ-4.jpg" alt="">
                    <div class="item-inner-overlay"></div>
                    <div class="item-content">
                      <div class="item-content-text">
                        Jesus Christ
                      </div>
                    </div>
                  </div>
                </a>
              </div>
                <div class="item">
                  <div class="item-inner">
                    <img src="" alt="">
                    <div class="item-inner-overlay"></div>
                    <div class="item-content">

                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="item-inner">
                    <img src="" alt="">
                    <div class="item-inner-overlay"></div>
                    <div class="item-content">

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script>
        $('#fullpage').fullpage({
          sectionsColor: ['#303030', '#303030']
        });
      </script>

<?php
  include "footer.php";
?>
