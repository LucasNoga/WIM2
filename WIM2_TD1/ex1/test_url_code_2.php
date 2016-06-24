
<html>
	<head>
		<meta charset="utf-8">
<title>test_url_code_1</title>
	</head>
	<body>
		<?php
			$url1 = 'edit?cours=wim2&auteur=Denis Finck';
			echo 'URL : ', $url1, '<br/>';
			echo 'Encodage avec urlencode : ', urlencode($url1), '<br/><br/>';
			echo 'Décodage avec urldecode(urlencode) : ', urldecode(urlencode($url1)), '<br/><br/>';
			echo 'Encodage avec rawurlencode : ', rawurlencode($url1), '<br/><br/>';
			echo 'Décodage avec rawurldecode(rawurlencode) : ', rawurldecode(rawurlencode($url1)), '<br/><br/>';
			echo 'Décodage mixte urldecode(rawurlencode) : ', urldecode(rawurlencode($url1)), '<br/><br/>';
			echo 'Décodage mixte rawurldecode(urlencode) : ', rawurldecode(urlencode($url1)), '<br/><br/>';
			echo 'Double codage mixte rawurlencode(urlencode) : ', rawurlencode(urlencode($url1)), '<br/><br/>';
?>
	</body>
</html>