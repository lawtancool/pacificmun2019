<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - committees page</title>

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

            Sketch links (for now):
            <br>
            <a href="adhoc.php">ADHOC</a>
            <br>
            <a href="ga.php">General Assemblies</a>

          </div>
        </div>
      </main>

      <script type="text/javascript">
        $('#fullpage').fullpage({
          sectionsColor: ['#303030']
        });
      </script>

<?php
  include "footer.php";
?>
