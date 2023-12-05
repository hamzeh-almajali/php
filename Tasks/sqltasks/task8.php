<?php

$cookieName = 'user';
$cookieValue = 'hamzeh almajali';
$expiryTime = time() + (86400 * 5);  
$cookiePath = '/';
$cookieDomain = '';  
$secure = false;     
$httponly = true;   

setcookie($cookieName, $cookieValue, $expiryTime, $cookiePath, $cookieDomain, $secure, $httponly);


echo "<h2>Retrieved Cookies:</h2>";
foreach ($_COOKIE as $name => $value) {
    echo "<p>$name: $value</p>";
}
setcookie($cookieName, '', time() - 3600, $cookiePath, $cookieDomain, $secure, $httponly);
?>
