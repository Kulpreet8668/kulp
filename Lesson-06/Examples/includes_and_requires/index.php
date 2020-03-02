<!DOCTYPE html>
  <head>
    <title>Includes & Requires</title>
  </head>
  <body>
    <header>
      <h1>Includes & Requires</h1>
    </header>

    <div>
      <header>
        <h2>Include Me a Bunch of Times</h2>
      </header>
      <!-- code here -->

      <?php

      for($i = 0; $i < 5; $i++){

        include('./include_me_alot.php');
      }

      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Include Me Only Once</h2>
      </header>
      <!-- code here -->
      <?php
      for($i = 0; $i < 5; $i++){

          include_once('./include_me_once.php');
         }
         ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Include Me if I Exist</h2>
      </header>
      <!-- code here -->
      <?php
      if (file_exists('./i-dont-exists-so-i-will-cause-a-warning.php')){
      include('./i-dont-exists-2so-i-will-cause-a-warning.php');
        }
      echo "but the warning woint r preventing:)";
    ?>
      </div>

    <hr>

    <div>
      <header>
        <h2>Nested Includes</h2>
      </header>
      <!-- code here -->
      <?php
include('./_include/include_within_include.php')

      ?>
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me a Bunch of Times</h2>
      </header>
      <!-- code here -->
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me Only Once</h2>
      </header>
      <!-- code here -->
    </div>

    <hr>

    <div>
      <header>
        <h2>Require Me if I Exist</h2>
      </header>
      <!-- code here -->
    </div>
  </body>
</html>