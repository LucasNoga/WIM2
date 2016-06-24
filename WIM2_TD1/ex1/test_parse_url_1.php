<pre>
<?php

$urls= array();
$url[0]='http://username:password@hostname.com/path/file.php?arg1=value1&arg2=value2#anchor';
$url[1]='http://hostname.com:8080/path/file.php?arg1=value1&arg2=value2#anchor';
$url[2]='http://subdom.hostname.com/path/file.php?arg1=value1&arg2=value2#anchor';
$url[3]='//www.example.com/path/file.php?arg1=value1&arg2=value2#anchor';
$url[4]='www.example.com/path/file.php?arg1=value1&arg2=value2#anchor';
$url[5]='/path/file.php?arg[]=value1&arg[]=value2#anchor';
$url[6]='path/file.php?arg1=value1&arg2=value2#anchor';

//mixed parse_url(String $url [, int $component = -1])

foreach($url as $v){
	var_dump(parse_url($v));
	echo "</br>";
}
?>