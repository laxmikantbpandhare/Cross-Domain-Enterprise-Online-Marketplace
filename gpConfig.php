<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '171832382206-rt2t2igq8rnjfgs1nnvsakv8u81bsms6.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'kvJFY6pOq7s16vJD4cI34290'; //Google client secret

$redirectURL = 'http://www.rajeshmarketplace.ga/product.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>