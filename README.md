# Bootstrap_Color_modes_PHP
Automatic setting of light and dark mode for Bootstrap in PHP

#Selecting night or day mode using php

$time = date("h:i");
$sunoff = date_sunset(time());
$sunon = date_sunrise(time());
if ($time < $sunoff && $time > $sunon){
  $modtime = "light";
}
else {
  $modtime = "dark";
}

#Settings for html template

data-bs-theme="$modtime"
