<pre>
<?php

$strs = array(
	'http://localhost/drupal/module1/fonction1/?arg1=value1&arg2=value2#anchor', 	'http://localhost/drupal/index.php?q=module1/fonction1&arg[]=value1&arg[]=value2#anchor', 	'http://localhost/drupal/index.php?q=module1/fonction1?arg1=value1&arg2=value2#anchor',
);


$j = 0;

$result = array();

foreach($strs as $v){
	$strs2[$j] = parse_url($v, PHP_URL_QUERY);
	parse_str($strs2[$j], $output);
	$result[] = $output;
}

var_dump($result);
	
?>