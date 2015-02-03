<?php

$address = "3001 Village Dr., Waynesboro, VA 22980";

echo "<h1>Homework 1 for Praxis</h1>";

echo "<h3>Assigment 1: Create a variable with address and print it out.</h3>";

echo "<pre>\n \$address = ";
var_dump($address);
echo "</pre>";

echo "<p>$address</p>";

echo "<h3>Assigment 2: Print list of authors and death year.</h3>";
$authors = array("Charles Dickens" => 1870, "William Thackeray" => 1863, "Anthony Trollope" => 1882, "Gerard Manley Hopkins" => 1889);

foreach ($authors as $name => $date) {
    echo "<p>$name died in $date</p>";
}


echo "<h3>Assigment 3: Pass a variable in the URL</h3>";


$url_var = $_GET["var"];

echo "var = $url_var";
?>

