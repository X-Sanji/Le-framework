<?php
/**
 * Created by PhpStorm.
 * User: liangxz@szljfkj.com
 * Date: 2017/3/14
 * Time: 14:17
 * 数据库配置文档
 */
return [

    'mysql' => [
        'database_type'    => 'mysql',
        'server'      => "192.168.31.230",
        'port'      => 3306,
        'database_name'  => "lb_livegame",
        'username'  => "root",
        'password'  => "123456",
        'charset'   => "utf8",
    ],


    'mongodb' => [
        'driver'   => 'mongodb',
        'host'     => "192.168.31.230",
        'port'     => 27017,
        'database' => "live_game",
        'username' => "hhq163",
        'password' => "bx123456",
         'db' => 'live_game', // sets the authentication database required by mongo 3
    ],

//    'redis' => [
//
//        'cluster' => env('REDIS_CLUSTER', false),
//
//        'default' => [
//            'host'     => env('REDIS_HOST', '127.0.0.1'),
//            'port'     => env('REDIS_PORT', 6379),
//            'database' => env('REDIS_DATABASE', 0),
//            'password' => env('REDIS_PASSWORD', null),
//        ],
//
//    ],

];