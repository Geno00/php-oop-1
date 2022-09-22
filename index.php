<?php

require_once __DIR__ . '/Movies.php';


$Film1 = new Movies("The Avengers", "Joss Whedon", "2012");

echo $Film1->getMovie;

