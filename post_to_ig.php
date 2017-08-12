<?php
//https://stackoverflow.com/questions/6594089/calculating-image-size-ratio-for-resizing

set_time_limit(0);
date_default_timezone_set('UTC');
require __DIR__.'/vendor/autoload.php';
/////// CONFIG ///////
$username = file_get_contents('username.txt');
$password = file_get_contents('password.txt');
$debug = true;
$truncatedDebug = false;
//////////////////////
/////// MEDIA ////////
$photoFilename = 'turtle-story.jpg';
$photoFilename2 = 'turtle-timeline.jpg';
//////////////////////
$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
try {
    $ig->setUser($username, $password);
    $ig->login();
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
    exit(0);
}

$metadata =
    ['caption' => 'Testing some pretty lit stuff'];
try {
    $ig->story->uploadPhoto($photoFilename, $metadata);
    $ig->timeline->uploadPhoto($photoFilename2, $metadata);
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
}
echo "\r\n";
echo 'SUCCESSFULLY POSTED TO YOUR INSTAGRAM AND INSTAGRAM STORY!';
echo "\r\n";
?>