<?php 

include 'bmi.php';
use body_mass_index as bmi;

//input weight/mass and height respectively
$bmi = bmi\calc(50, 4.59);
print bmi\category($bmi);