<?php

//http://www.pontikis.net/blog/auto_post_on_twitter_with_php
//api id -KQRNLy8L4t8dQ4Loay0N1cGJV
//api secret-lFi8oSsnR2NsHZUkArGFNx4IMa2unFTTxJm4zRWkC7fd9WlKKr
//owner id-837804571

//access token-837804571-OORMT78jbTrbrgiLk2HYKIWyEblUuZN94PWub1pN
//Access token secret-QMB9fvepUud1p8ykK68Ye3O0WfSzWeGfn9WQJbWhqJu08

// require codebird

require_once('codebird.php');
 
//\Codebird\Codebird::setConsumerKey("your_ConsumerKey", "your_ConsumerSecret");
\Codebird\Codebird::setConsumerKey("KQRNLy8L4t8dQ4Loay0N1cGJV", "lFi8oSsnR2NsHZUkArGFNx4IMa2unFTTxJm4zRWkC7fd9WlKKr");
$cb = \Codebird\Codebird::getInstance();
//$cb->setToken("your_AccessToken", "your_AccessTokenSecret");
$cb->setToken("837804571-OORMT78jbTrbrgiLk2HYKIWyEblUuZN94PWub1pN", "QMB9fvepUud1p8ykK68Ye3O0WfSzWeGfn9WQJbWhqJu08");
 
//$data='Company name:'.$corporateName.'    Start date:'.$startDate.'     End Date:'.$endDate.'     Amount funded:'.$Amount.' @jpmorgan #code4good';
$data="Hie Nandish";
$params = array(
  'status' => $data
);
$reply = $cb->statuses_update($params);
echo 'Done';
?>