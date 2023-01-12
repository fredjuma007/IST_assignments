<?php

class Fruit
{
  public $name;
  public $colour; //properties with 2 variables

  //initialise using a construct
  function __construct($name, $colour) {
    $this->name = $name; 
    $this->colour = $colour; 
  }

  //the 2 functions to echo the name and colour
  function show_name()
   {
    return $this->name;
  }
  function show_colour()
   {
    return $this->colour;
  }
}

//the output
$apple = new Fruit("Mapera", "green");
echo $apple->show_name();
echo "<br>";
echo $apple->show_colour();
?>