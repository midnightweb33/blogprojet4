<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?= App\Main::getTitle();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>



  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">

          <a class="brand" href="#">Project name</a>
    </div>

    <div class="container" style="padding-top:100px">

      <?= $content; ?>

    </div> <!-- /container -->


  </body>
</html>
