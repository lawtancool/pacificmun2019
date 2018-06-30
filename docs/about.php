<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pacificmun drawing - about page</title>

<?php
  include "header.php";
?>

      <header>
        <div class="bars" onclick="openNav();">
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <h2>PACIFICMUN</h2><h3>About</h3>
        <img class="logo" src="logo.svg" alt="logo" />
      </header>

      <main id="pjax-container">
        <div id="fullpage">
          <div class="section">
          </div>
          <div class="section">Section 2</div>
        </div>
      </main>

      <script>
        $('#fullpage').fullpage({
          sectionsColor: ['#303030', '#0C75C7']
        });
      </script>

<?php
  include "footer.php";
?>
