<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/config/accounts.inc.php";
include_once($path);

?>
<html>
  <body class="home">
    <div><?php echo $userInfo['name'] ?></div>
  </body>
</html>