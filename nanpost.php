<?php
// require Facebook PHP SDK
// see: https://developers.facebook.com/docs/php/gettingstarted/
require_once("facebook.php");
 
// initialize Facebook class using your own Facebook App credentials
// see: https://developers.facebook.com/docs/php/gettingstarted/#install
$config = array();
$config['appId'] = '667159863361317';//app id
$config['secret'] = '764adfd7d7dc96e336a907564e7650aa';//app_secret
$config['fileUpload'] = false; // optional
 
$fb = new Facebook($config);
 
$data='Company name:'.$corporateName.'    Start date:'.$startDate.'     End Date:'.$endDate.'     Amount funded:'.$Amount.' @jpmorgan #code4good';
// define your POST parameters (replace with your own values)
$params = array(
	//page access token or ur id access token
  "access_token" => "CAAJex0KpZCyUBAPHIzRkpUSoeGz2rBb5lmEIFZBQVB7ZCdaIYbZB44VIpksLP9DUs6tSEBUrgJZCDJ6qrEpFyhOpppSdbk9YIZBsXpr4meNXpfZBfwIkxYrST6LwoWypaeqQEnmFOZBUqPyc1pZBZBD2vnG1xSpVdYuA67eEKQr9u2Y5ZAqeMlEtwxH2sQVeZCdban4ZD", // access token see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => $data,
  "link" => "http://magicbus.com/",
  //"picture" => "http://i.imgur.com/lHkOsiH.png",
  "name" => "Magic bus event",
  "caption" => "www.magicbus.com",
  "description" => "Magic bus event tagic place.."
);
 
// post to Facebook
// see: https://developers.facebook.com/docs/reference/php/facebook-api/
try {
  //$ret = $fb->api('/804747506212048/feed', 'POST', $params); //this is user acces id
  $ret = $fb->api('/319956971516911/feed', 'POST', $params);  //this is page access id
  echo 'Successfully posted to Facebook';
} catch(Exception $e) {
  echo $e->getMessage();
}
?>
