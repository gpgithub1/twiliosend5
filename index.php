
<?php 
 
// this line loads the library 
 
// require('Twilio.php'); 
// use vendor\twilio\sdk\Twilio\Rest\Client; 
 
error_reporting(E_ALL); 
 
require_once "vendor/autoload.php"; 
 
use Twilio\Rest\Client; 
 
echo "Message Sending App"; 
 
 
 
$account_sid = 'AC0a5c0e09f94e8c8a78833edbdca2ca2b' ; 
 
$auth_token = '88019fb47ad059e907c15df85cfd17d0'; 
 
$client = new Client($account_sid, $auth_token); 
 
 
 
 
 
 
 
 
 
$client->messages->create( 
 
'+19173885926', 
 
array( 
 
// 'To' => "+19173885926", 
 
'From' => "+12408061013", 
 
'Body' => "Hello from Gaurav Pandey CS643 Fall 2017" 
 
)); 

?> 