<?php

echo "<h1>Homework 1 for Praxis</h1>";

echo "<h3>Assigment 1: Create a function to convert seconds to years.</h3>";


function sec2year($num) {
    # 60 seconds in a minute
    $minutes = $num / 60;

    # 60 minutes in an hour
    $hours = $minutes / 60;

    # 24 hours in a day
    $days = $hours / 24;

    # 365 days in a year
    $years = $days / 365;

    echo "<p>$num seconds is equal to $years years.</p>";
    echo "<p>$num seconds is equal to ".number_format($years, 10)." years.</p>";
    echo "<br>";

}

sec2year(600000000);

sec2year(60);

sec2year(400.53);

$seconds = $_GET["seconds"];
if (!empty($seconds)) {
    sec2year($seconds);
} else {
    echo "Add a 'seconds' variable to the URL.";
}


echo "<h3>Assignment 2: Time traveller</h3>";

$year = $_GET["year"];

if (1900 >= $year && !empty($year)) {
    echo "Greetings traveler from the year $year! Would you like to join or wagon train heading West?";
} elseif (1900 < $year && $year <= 2020) {
    echo "Greetings traveller from the year $year! What is your favorite T.V. show?";
} elseif ($year > 2020) {
    echo "Greetings taveller from the year $year! What stock should I invest in?";
} else {
    echo "Add a 'year' variable to the URL.";
}


?>
