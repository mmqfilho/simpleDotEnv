<?php
include_once 'src/environment.php';
use Mmqfilho\SimpleDotEnv\Environment;

// create object
new Environment();

// view the $_ENV var
echo 'The $_ENV variable:<br><hr>';
var_dump($_ENV);