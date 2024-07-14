<?php 

$int = 100;

filter_var($name, FILTER_VALIDATE_INT);

if(!filter_var($int, FILTER_VALIDATE_INT) == false){
    echo "to'g'ri";
} else{
    echo "not'g'ri";
};

?>