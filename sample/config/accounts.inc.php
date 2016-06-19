<?php session_start();

require_once '../vendor/autoload.php';

$auth0 = new \Auth0\SDK\Auth0(array(
    'domain'        => 'site.eu.auth0.com',
    'client_id'     => '',
    'client_secret' => '',
    'redirect_uri'  => ''
));

$userInfo = $auth0->getUser();
var_dump($userInfo);