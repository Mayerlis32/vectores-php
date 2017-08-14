<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doble y Triple de un Numero.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">


      <?php
      $numero=array(6);
      $doble=($numero[0]*2);
      $triple=($numero[0]*3);

      echo "Numero: $numero[0] <br />";
      echo "Doble: $doble <br />";
      echo "Triple: $triple";

       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
