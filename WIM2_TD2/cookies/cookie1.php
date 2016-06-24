<?php
setcookie('test_cookie_1', 'valeur_test_1', time()+30*24*60*60);
setcookie('test_cookie_2', 'valeur_test_2', time()+30*24*60*60);
setcookie('test_cookie_3', 'valeur_test_3', time());
setcookie('test_cookie_4', 0, time()+30*24*60*60);
setcookie('test_cookie_5', '', time()+30*24*60*60);
setcookie('test_cookie_6', false, time()+30*24*60*60);
setcookie('test_cookie_7', 'valeur_test_7');
var_dump($_COOKIE);

echo '<br/>';
echo "<br/>";
echo "<a href=\"cookie1.php\">recharger les cookies</a><br/>";
echo "<a href=\"cookie2.php\">cookie2.php</a><br/>";

?>
