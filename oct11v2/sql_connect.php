<?php

// Create connection
$mysql = new mysqli("localhost", "root", "","quizdb");

// Check connection
if (!$mysql) {
    printf("Connect failed: %s\n", mysqli_connect_error());
}
?>