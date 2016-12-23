<?php
/**
 * User: Blink
 * Email: caogemail@163.com
 * Date: 16/12/23
 * Time: 上午3:02
 */
require './../src/php/BeehiveRedis.php';
require './../config/redis.php';

foreach ($options as $option) {
    $redis = new BeehiveRedis($option);

    echo $redis->ping() . PHP_EOL;
    echo $redis->ttl('test') . PHP_EOL;
    $redis->set('test', '1');

    var_dump($redis->get('test'));
}