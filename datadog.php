
<?php
require '/home/firas/datadoghire/php-datadogstatsd/libraries/datadogstatsd.php';

$apiKey = '0f32b85e17d89512cfae1dd0b54aebb7';
$appKey = 'myAppKey';

DataDogStatsD::configure($apiKey);
DataDogStatsD::event('A thing broke!', array(
    'alert_type'      => 'error',
    'aggregation_key' => 'test_aggr'
));
DataDogStatsD::event('Now it is fixed.', array(
    'alert_type'      => 'success',
    'aggregation_key' => 'test_aggr'
));
?>
