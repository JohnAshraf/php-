<?php
$age = 13;

switch ($age) {
  case ($age<5):
    echo "Stay at home";
    break;
  case ($age===5):
    echo "Go to Kindergarden";
    break;
  case in_array($age , range(6,12)):
    echo "Go to grade :",($age-4);
    break;
default :
    echo "Enter age between from 5 to 12";
}
?>