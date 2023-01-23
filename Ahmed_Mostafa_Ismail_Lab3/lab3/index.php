<?php
require_once("loader.php");
$visitor = new visitor();
$counter = new counter();
$counter->setHandler("counter.txt");
$counter->setcounter(); 
 
if($visitor->isvisited()){
    echo $counter->getcounter();
}else {
    $counter->increasecounter(); 
    echo $counter->getcounter(); 
}


?>