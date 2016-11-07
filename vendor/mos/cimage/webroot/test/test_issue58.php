<?php
// Include config for all testcases
include __DIR__ . "/config.php";



// The title of the test case
$title = "Testing issue 58 - JSON reporting filesize";



// Provide a short description of the testcase.
$description = "Verify that JSON returns filesize of actual image.";



// Use these images in the test
$images = array(
    'kodim08.png',
);



// For each image, apply these testcases 
$testcase = array(
    '&w=300',
    '&w=300&h=300',
    '&w=300&h=300&stretch',
    '&w=300&h=300&crop-to-fit',
    '&w=300&h=300&fill-to-fit',
);



// Apply testcases and present results
include __DIR__ . "/template.php";
