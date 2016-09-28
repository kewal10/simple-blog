<?php

   $connection = new mysqli('localhost', 'root', 'root', 'tech');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}