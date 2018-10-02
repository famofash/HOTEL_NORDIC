<?php
namespace custom;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\FacebookSDKException;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;

class facebook {
 
public static function postadd()
{
    $config = array();
$config['appId'] = '373306376164854';
$config['secret'] = '1a65db3614785555d3c1d4707818644c';
$config['fileUpload'] = false; // optional
$helper = new FacebookRedirectLoginHelper('me/books.reads');
$loginUrl = $helper->getLoginUrl();
echo $loginUrl;
/*$fb = new Facebook($config);
///
$params = array(
  "access_token" => "YOUR_ACCESS_TOKEN", 
  "message" => "Here is a blog post about auto posting on Facebook using PHP #php #facebook",
  "link" => "http://www.pontikis.net/blog/auto_post_on_facebook_with_php",
  "picture" => "http://i.imgur.com/lHkOsiH.png",
  "name" => "How to Auto Post on Facebook with PHP",
  "caption" => "www.pontikis.net",
  "description" => "Automatically post on Facebook with PHP using Facebook PHP SDK. How to create a Facebook app. Obtain and extend Facebook access tokens. Cron automation."
);*/

}
}