<?php

namespace body_mass_index; //encapsulating 

abstract class Thresholds //threshold set the limit
{
  
  const UNDERWEIGHT = 18.5;
  const OVERWEIGHT = 25;
  const OBESE = 30;
}

//Calculates BMI
function calc($weight, $height) 
{
  return $weight / pow($height, 2); //'pow' function raises to power 2
}

//Gets BMI category
function category($bmi) {
  if ($bmi > Thresholds::OBESE) return "obese";
  elseif ($bmi > Thresholds::OVERWEIGHT) return "overweight";
  elseif ($bmi < Thresholds::UNDERWEIGHT) return "underweight";
  else return "heathy";
}