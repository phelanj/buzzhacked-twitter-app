<?php
require_once('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$twitter =  new TwitterAPIExchange(array(
    'oauth_access_token' => "780498354874650624-OoMQTkuwnddOXyW2XN1qdch7afES6r7",
    'oauth_access_token_secret' => "yFgK0JWVlfrM2dqrze08lYso8AwWXSvooYgnzN98rcO1O",
    'consumer_key' => "kMq5g5DVxDxAlH8Dq0Z2LVNDy",
    'consumer_secret' => "K5IOhKvnM5xFB5auuEa1DLzuQ7I720kXSgHCTfxGpOM2cupKV1"
));
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$requestMethod = 'POST';
$postfields = array('status' => 'Have you been #pwned?');
echo $twitter->buildOauth($url, $requestMethod)
             ->setPostfields($postfields)
             ->performRequest();

?>
