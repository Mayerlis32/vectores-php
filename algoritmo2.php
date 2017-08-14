<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Area Circulo.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">


      <?php
        $circulo=array(5,3.1416);
        $radio=pow($circulo[0],2);
        $area=($circulo[1]*$radio);

        echo "PI: $circulo[1] <br />";
        echo "Radio: $radio <br />";
        echo "Area Circulo: $area";
        
       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
