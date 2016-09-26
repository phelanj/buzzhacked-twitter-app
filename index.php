<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2818292279-3MFeQWmr8fnW7D1jxWM4O0iLEzC5ZCFcqkE1keH",
    'oauth_access_token_secret' => "1RVo2b5VBDpvK0IDEeHfdMCCdW3PPCLiId85Sa4gPWwJz",
    'consumer_key' => "TVZvWLVztfcwf3FteoGcoZV2j",
    'consumer_secret' => "zpVqhzqePYnFhBCrNTYOhZfRwb8afeuvPKU8EEs5m4MZ0TGLii"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=realDonaldTrump&count=5';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();

?>