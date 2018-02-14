<?php

//echo date("d"); // Day
//echo date("m"); // Month
//echo date("Y"); // Year
//echo date("l"); // day of the week

//echo date ("Y/m/d"); // 2018/02/11
//echo date("m-d-Y");  // 02-11-2018

//echo date("h") // Hour
//echo date("i"); // Minute
//echo date("s"); // Seconds
//echo date("a"); // AM or PM

// Set time zone
date_default_timezone_set("America/New_York");


//echo date("h:i:sa");

$timestamp = mktime(10, 14, 54, 9, 10, 1981);

echo $timestamp;
?>