<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
    <form method="GET">
      <input type="text" name="person" value="">
      <button>SUBMIT</button>

    </form>

    <?php
      $name = $_GET['person'];
      if ($name == "Ciprian") {
        echo "BRAVOOOOOOO";
      } else {
        echo "Nu ai ghicit, mai incearca";
      }
      // echo $name. " is a handsome fellow!";
    ?>

  </body>
</html>
