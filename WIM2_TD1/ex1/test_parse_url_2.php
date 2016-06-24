<pre>
<?php

$urls= array(
	'http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_USER,
	'http://hostname.com:8080/path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_USER,
	'http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_USER,
	'//www.example.com/path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_HOST, 
	'www.example.com/path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_PATH,
	'/path/file.php?arg[]=value1&arg[]=value2#anchor' => PHP_URL_QUERY,
	'path/file.php?arg1=value1&arg2=value2#anchor' => PHP_URL_FRAGMENT,
);

foreach($urls as $k => $v){
	var_dump(parse_url($k, $v));
	echo "</br>";
}

?>