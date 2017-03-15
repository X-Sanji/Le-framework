<?php
/**
 * Created by PhpStorm.
 * User: liangxz@szljfkj.com
 * Date: 2017/3/14
 * Time: 17:27
 */
namespace bootstrap;

use Medoo\Medoo;
use MongoDB\Client;

final class Bootstrap
{
    private static $capsule;
    private static $mongodb;
    /**
     * Bootstrap constructor.
     * 设置为私有方法，防止外部 new 操作
     */

    private function __construct()
    {

    }

    /**
     * 获取MYSQL连接对象
     * 只能通过静态方法进行调用
     */
    public static function DB()
    {
        if(!self::$capsule)
            self::$capsule = self::getCapsule();
        return self::$capsule;
    }

    private static function getCapsule()
    {
        $databaseConfig = require __DIR__.'/../config/databases.php';
        return new Medoo($databaseConfig['mysql']);
    }

    /**
     * 获取mongodb连接对象
     */
    public static function MongoDB()
    {
        if(!self::$mongodb)
            self::$mongodb = self::getMongodb();
        return self::$mongodb;
    }
    private static function getMongodb()
    {
        $mongodb = require __DIR__.'/../config/databases.php';
        return new Client("mongodb://".$mongodb['mongodb']['host'].":".$mongodb['mongodb']['port']."/",
            ['username' => $mongodb['mongodb']['username'], 'password' => $mongodb['mongodb']['password'],
                'db' => $mongodb['mongodb']['db']]);
    }

    /**
     * 防止被克隆
     */
    final function __clone()
    {
        // TODO: Implement __clone() method.
    }


}