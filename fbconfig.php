<?php

require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookOtherException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphSessionInfo.php' );
require_once( 'Facebook/Gra.php' );
 

use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\GraphUser;

session_start();

FacebookSession::setDefaultApplication('518171091647820', 'f99be282720f0f1e27f11fecb44f75ad');

$helper = new FacebookRedirectLoginHelper('http://ec2-54-88-40-97.compute-1.amazonaws.com/TestingStuff/PHP/index.php');


try {
  $session = $helper->getSessionFromRedirect();
} catch(FacebookRequestException $ex) {
	 print_r( $ex );
  // When Facebook returns an error
}
if ($session) {
	echo 'entered';

}
else
{

echo '<a href="' . $helper->getLoginUrl() . '">Login with Facebook</a>';
}

?>

