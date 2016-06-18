<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/config/accounts.inc.php";
include_once($path);

$profile = $auth0->getUser();

?>

<script src="https://cdn.auth0.com/js/lock-9.1.min.js"></script>
<script type="text/javascript">

  var lock = new Auth0Lock('c_id', 'site.eu.auth0.com');


  function signin() {
    lock.show({
        callbackURL: 'https://web.site/loginCallback.php'
      , responseType: 'code'
      , authParams: {
        scope: 'openid email'  // Learn about scopes: https://auth0.com/docs/scopes
      }
    });
  }
</script>
<button onclick="window.signin();">Login</button>
