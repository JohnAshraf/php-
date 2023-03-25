<?php
$age = 10;

switch ($age) {
  case ($age<5):
    echo "Stay at home";
    break;
  case ($age===5):
    echo "Go to Kindergarden";
    break;
  case ($age>5):
    echo "Go to grade :",$age;
    break;
}
?>