<?php

// Credit: 
// http://stackoverflow.com/questions/14998961/php-write-file-from-input-to-txt

if(isset($_POST['name']) && isset($_POST['mood'])) {

    // Define variables for name and mood
    $name = $_POST['name'];
    $mood = $_POST['mood'];

    // Concatenate variables into a string
    $data = $name . ' is feeling ' . $mood . " today. \n";

    // Open moods.txt
    // Write the string in the moods.txt
    $ret = file_put_contents('moods.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        // Kill the process if there is an error
        die('There was an error writing this file');
    }
    else {
        // If everything is good, go to thanks.php
        include('thanks.php');
    }
}

?>