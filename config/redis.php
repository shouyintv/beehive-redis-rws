<?php
/**
 * User: Blink
 * Email: caogemail@163.com
 * Date: 16/12/23
 * Time: 下午3:05
 */
$options = [
    'user' => [
        'host' => '172.16.90.41',
        'port' => 6379,
        'auth' => ''
    ],
    'cache' => [
        'host' => '172.16.90.41',
        'port' => 6379,
        'auth' => '',
        'readWeight' => 5,
        'reads' => [
            [
                'host' => '172.16.90.41',
                'port' => 6379,
                'auth' => ''
            ],
            [
                'host' => '172.16.90.41',
                'port' => 6379,
                'auth' => ''
            ]
        ]
    ]
];