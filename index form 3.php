<?php
$name = filter_input(INPUT_POST, "name");
$surname = filter_input(INPUT_POST, "surname");
$city = filter_input(INPUT_POST, "city");
$studemt_number = filter_input(INPUT_POST, "studemt_number");
$race = filter_input(INPUT_POST, "race");

if ($name != null && $name != "" &&
    $surname != null && $surname != "" &&
    $city != null && $city != "" &&
    $studemt_number != null && $studemt_number != "" &&
    $race != null && $race != "") {

    echo "<br>";


    echo "<p style='color:green; font-weight:bold;'>Please fill in the following</p>";
    echo "<br>";

    echo "<p style='color:red; font-weight:bold;'>Please enter your name :  . $name </p>";
    echo "<br>";

    echo "<p style='color:red; font-weight:bold;'>Please enter your surname :  . $surname </p>";
    echo "<br>";

    echo "<p style='color:red; font-weight:bold;'>Please enter your city :  . $city </p>";
    echo "<br>";

    echo "<p style='color:red; font-weight:bold;'>Please enter your studemt_number  . $studemt_number </p>";
    echo "<br>";

    echo "<p style='color:red; font-weight:bold;'>Please enter your race  . $race </p>";
    echo "<br>";

    echo "<p style='color:green; font-weight:bold;'>Log in successfully</p>";

} else {

    echo "<p style='color:red; font-weight:bold;'>Try again please</p>";
 

}
 

?>