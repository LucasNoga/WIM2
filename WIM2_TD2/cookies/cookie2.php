<?php
setcookie('test_cookie_1', 'valeur_test_1', time()-3600);
setcookie('test_cookie_2', 'XXX', time()-3600);
setcookie('test_cookie_4', false);
setcookie('test_cookie_7', false);


var_dump($_COOKIE);

echo '<br/>';
echo '<br/>';
echo "<a href=\"cookie2.php\">suppression des cookies</a><br/>";
echo "<a href=\"cookie1.php\">cookie1.php</a><br/><br/>";
echo "<a href=\"/wim2NL/cookies/local/cookie_loc.php\">cookie_loc.php</a><br/>";
?>

