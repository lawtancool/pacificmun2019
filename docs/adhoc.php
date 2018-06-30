<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - adhoc page</title>

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
            <div id="adhoc">
              <div class="adhoc-inner">
                <div class="glitch" data-text="ADHOC">
                  ADHOC
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <script>
        $('#fullpage').fullpage({
          sectionsColor: ['#303030']
        });
      </script>

<?php
  include "footer.php";
?>
