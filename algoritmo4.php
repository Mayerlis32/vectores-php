<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Teorema de Pitagoras.</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <div class="container col-12 col-md-8 col-9">


      <?php
        $catetos=array(5, 12);
        $cateto=pow($catetos[0],2);
        $cateto1=pow($catetos[1],2);
        $h=sqrt($cateto+$cateto1);

        echo "Catetos: $catetos[0] <br />";
        echo "Catetos: $catetos[1] <br />";
        echo "Hipotenusa: $h";
        
       ?>

    </div>

  </body>
  <script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>
