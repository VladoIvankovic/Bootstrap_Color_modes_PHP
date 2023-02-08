<?php

    // Set style variable
if(isset($_GET['style']) && !empty($_GET['style'])){
 $_SESSION['style'] = $_GET['style'];
 if(isset($_SESSION['style']) && $_SESSION['style'] != $_GET['style']){
  echo "<script type='text/javascript'> location.reload(); </script>";
 }
}

//Setting of light and dark
$time = date("H:I");
$sunoff = date_sunset(time());
$sunon = date_sunrise(time());
if ($time < $sunoff && $time > $sunon){
  $modtimex = "light";
}
else {
  $modtimex = "dark";
}

    $modtime = isset($_SESSION['style']) ? $_SESSION['style'] : "$modtimex";

 ?>
 <!doctype html>
<!--  in data-bs-theme show light or dark mode -->
<html lang="en" data-bs-theme="<?php echo "$modtime"; ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting of light and dark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Automatic setting of light and dark mode for Bootstrap in PHP</h1>

     <?php
 if ($modtime == 'dark') {
   echo "<a class='btn btn-danger btn-sm' href='?style=light' role='button'>Turn on the light </a>";
 }
 else {

   echo "<a class='btn btn-danger btn-sm' href='?style=dark' role='button'>Turn off the light </a>";
 }
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
