<?php
setcookie('local_cookie_1', 'valeur_local_1', time()+30*24*60*60);
setcookie('local_cookie_2', 'valeur_local_2', time()+3600, '/', '', false, true);
var_dump($_COOKIE);

echo "<br/>";
echo "<br/>";
echo "<a href=\"../cookie1.php\">cookie_1.php</a><br/>";
echo "<a href=\"../cookie2.php\">cookie_2.php</a><br/>";

?>