<?php

$addresses = [
	'http://www.google.com',
	'http://www.facebook.com',
	'http://www.youtube.com'
];

$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];

header('Location: ' . $randomUrl, true, 303);

?>
