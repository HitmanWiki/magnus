<?php
session_start();
ob_start();
if($_SERVER['HTTP_HOST']=="localhost")
{
$database_host 		= 'localhost';

$database_username 		= 'root';

$database_password 		= 'rootroot';

$database_name 			= 'magnus_immigration';

}
else
{
$database_host 			= 'localhost';

$database_username 		= 'u671144587_mags';

$database_password 		= '$^QHB[:7';

$database_name 			= 'u671144587_magnus';	



//$database_host 			= 'localhost';

//$database_username 		= 'infotecw_firstma';

//$database_password 		= 'infotecw_firstma';

//$database_name 			= 'infotecw_firstman';

}


//open mysql connection

$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);


if ($mysqli->connect_error) 

{

    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);

} 

 



date_default_timezone_set('Asia/Kolkata');

$currentDateTime=date('m/d/Y H:i:s');

$newDateTime = date('h:i A', strtotime($currentDateTime));

$dd=date('l\, F jS\, Y ');



$tody1=date("Y-m-d");

$retrn=date('Y-m-d', strtotime('+14 days', strtotime($tody1)));



$ip=md5(

    $_SERVER['REMOTE_ADDR'] .

    $_SERVER['HTTP_USER_AGENT']

); 



$time=date("Y/m/d");

$time1=date("Y-m-d h:i:sa");



function friendly_seo_string($vp_string){
    
    $vp_string = trim($vp_string);
    
    $vp_string = html_entity_decode($vp_string);
    
    $vp_string = strip_tags($vp_string);
    
    $vp_string = strtolower($vp_string);
    
    $vp_string = preg_replace('~[^ a-z0-9_.]~', ' ', $vp_string);
    
    $vp_string = preg_replace('~ ~', '-', $vp_string);
    
    $vp_string = preg_replace('~-+~', '-', $vp_string);
        
    return $vp_string;
    } 

function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ", array_splice($words, 0, $word_limit));
}


?>