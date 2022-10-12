<?php
if($_POST['user'])
{ 

    $test = "ajax ok with date :: ".$_POST['user'];
    echo (json_encode($test)); die;
}


?>