<?php

echo('<br/>');
echo('connect.php - DONE!');
echo('<br/>');

$mysqli = new mysqli('localhost', 'root', '326751111maxim', 'test_shop');
    if ($mysqli->connect_error) {
        die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
    }





