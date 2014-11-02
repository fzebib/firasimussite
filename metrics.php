<?php

require '/var/www/html/php-datadogstatsd/libraries/datadogstatsd.php';

$apiKey = '0f32b85e17d89512cfae1dd0b54aebb7';
$appKey = 'c8c5dee8457aa27e939485d83298c191a439bab7';

DataDogStatsD::increment('web.page_viewsphppg1', array('tagname' => 'page:pageview1','tagname' => 'support'));

		
?>
