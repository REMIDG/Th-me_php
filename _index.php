<?php ini_set("display_errors", true); session_start(); ?>

<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Utilisation all phones -->

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><!-- Font default -->
    <link rel="stylesheet" href="css/bootstrap.min.css"><!-- Link css bootstrap -->
    <link rel="stylesheet" href="css/style.css"><!-- Link css pure -->


    <title>52 Semaines pour Voyager !</title>
  </head>
  <body>

    <?php include('page/navbar.php'); ?>

    <div class="container-fluid">

      <?php include('page/header.php'); ?>

      <?php include('page/presentation.php'); ?>

      <?php include('page/footer.php'); ?>

    </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script><!-- Link Jquery -->

  <script
      src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"
      integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE="
      crossorigin="anonymous">
  </script><!-- plugin color en Jquery -->

  <script src="js/javascript.js"></script>

  <script src="https://use.fontawesome.com/93a4498e97.js"></script><!-- Link data based of icons -->
  <script src="js/bootstrap.min.js"></script><!-- Link js bootstrap -->

  </body>
</html>
