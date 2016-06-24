<pre>
<?php
echo 'Vous avez demandé le fichier ' . $_SERVER["REQUEST_URI"] . '<br/>';
echo "Je m'appelle jean. <br/>";

$float = $_SERVER['REQUEST_TIME_FLOAT'];
$int = $_SERVER['REQUEST_TIME'];
#echo "le temps de la requete en float " . $float . '<br/>';
#echo "le temps de la requete en int " . $int . '<br/>';


echo '<br/>' . "L'aborescence de root " . $_SERVER["DOCUMENT_ROOT"] . '<br/>';
echo '<br/>' . "L'aborescence du fichier depuis root " . $_SERVER["DOCUMENT_ROOT"] . '<br/>';

echo '</br>la concatenation des 2</br>';
echo $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'] ;

?>