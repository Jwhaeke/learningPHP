<?php

    #Date

    // echo date('d'); // day
    // echo date ('m'); // month
    // echo date ('y'); // year
    // echo date ('l'); // day of week

    // echo date('d/m/y'); 
    // echo date('d-m-y');

    // echo date('h'); //Hour
    // echo date('i'); //Min
    // echo date('s'); //Seconds
    // echo date('a'); // AM or PM

    #Set Timezone

// date_default_timezone_get('Europe/Netherlands');    

// echo date('h:i:sa');    

// The Unix time (or Unix epoch or POSIX time or Unix 
// timestamp) is a system for describing points in time, 
// defined as the number of seconds elapsed since midnight 
// proleptic Coordinated Universal Time (UTC) of 
// January 1, 1970, not counting leap seconds.

// $timestamp = mktime(10, 14 , 54, 9, 10, 1981);
// echo date('d/m/y h:i:sa', $timestamp);
// Use date() to make timestamps readable

$timestamp2 = strtotime('7:00pm March 22 2016');
$timestamp3 = strtotime('tomorrow');
$timestamp4 = strtotime('next Sunday');
$timestamp5 = strtotime('+2 Months');
$timestamp6 = strtotime('+2 days');


// echo $timestamp2;

echo date('d/m/y h:i:sa', $timestamp6);
?>