<?php


require "/home/firas/datadoghire/php-datadogstatsd/libraries
/datadogstatsd.php";
$apiKey = '0f32b85e17d89512cfae1dd0b54aebb7';
$appKey = '2167c96272932f013e1fcac7f95753ceb81046a2';
DataDogStatsD::configure($apiKey, $appKey);


DataDogStatsD::increment('web.page_views');
DataDogStatsD::histogram('web.render_time', 15);
DataDogStatsD::set('web.uniques', 3 /* a unique user id */);


//All the following metrics will be sent in a single UDP packet to the statsd server
#BatchedDatadogStatsD::increment('web.page_views')
#BatchedDatadogStatsD::histogram('web.render_time', 15);
#BatchedDatadogStatsD::set('web.uniques', 3 /* a unique user id */);
#BatchedDatadogStatsD::flush_buffer(); // Necessary

DataDogStatsD::configure($apiKey, $appKey);
DataDogStatsD::event('A thing broke!', array(
    'alert_type'      => 'error',
    'aggregation_key' => 'test_aggr'
));
DataDogStatsD::event('Now it is fixed.', array(
    'alert_type'      => 'success',
    'aggregation_key' => 'test_aggr'
));




?>
