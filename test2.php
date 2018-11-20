<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>ALEGE UN NUMAR DE LA 1-4</h1>

    <form method="get">
    <input type="text" name="numeric" value="">
    <button>SUBMIT</button>
    </form>

    <?php

    $x = $_GET['numeric'];

    if ($x == 1) {
      echo "Ciprian e misto!";
    }
    elseif ($x == 2) {
      echo "Ciprian e aproape misto!";
    }
    elseif ($x == 3) {
      echo "Eliza e frumoasa!";
    }
    elseif ($x == 4) {
      echo "Floricica e cool!";
    }
    else {
      echo "SUCKER!!!";
    }
    ?>
  </body>
</html>
