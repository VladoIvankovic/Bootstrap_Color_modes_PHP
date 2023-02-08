## **# Bootstrap_Color_modes_PHP**
Automatic setting of light and dark mode for Bootstrap in PHP

###### #Creating _SESSION

    if(isset($_GET['style']) && !empty($_GET['style'])){
     $_SESSION['style'] = $_GET['style'];
     if(isset($_SESSION['style']) && $_SESSION['style'] != $_GET['style']){
      echo "<script type='text/javascript'> location.reload(); </script>";
     }
    }

###### #Selecting night or day mode using php

    $time = date("H:I");
    $sunoff = date_sunset(time());
    $sunon = date_sunrise(time());
    if ($time < $sunoff && $time > $sunon){
      $modtimex  = "light";
    }
    else {
      $modtimex  = "dark";
    }

###### #Choosing a style

    $modtime = isset($_SESSION['style']) ? $_SESSION['style'] : "$modtimex";

###### #Settings for html template

`data-bs-theme="$modtime"`

###### #Style selection buttons

     if ($modtime == 'dark') {
       echo "<a class='btn btn-danger btn-sm' href='?style=light' role='button'>Turn on the light </a>";
     }
     else {
    
       echo "<a class='btn btn-danger btn-sm' href='?style=dark' role='button'>Turn off the light </a>";
     }
