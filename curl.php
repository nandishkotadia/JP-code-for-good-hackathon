<?php



$url = 'http://api.flickr.com/services/xmlrpc/';
$ch = curl_init($url);
 $x = "client_id=b0f438e7169f417689017a9c6c2c33f8&client_secret=f38d4ba4b0154b8c80d4a26566f8f133&code=23534&redirect_uri=http://google.com";
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $x);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
 
$response = curl_exec($ch);
curl_close($ch);



?>