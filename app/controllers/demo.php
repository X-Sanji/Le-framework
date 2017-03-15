<?php
/**
 * Created by PhpStorm.
 * User: liangxz@szljfkj.com
 * Date: 2017/3/14
 * Time: 13:58
 */
namespace app\controllers;

use bootstrap\Bootstrap;
use bootstrap\Configuration;

class Demo
{
    public function index()
    {
        $res = Bootstrap::MongoDB()->selectDatabase('live_game')->selectCollection('user_chart_info');
        $find  = $res->findOne(['user_id'=>2]);
        var_export($find);

    }
    public function test()
    {
        $res = Bootstrap::DB()->select('menus',"*");
        var_export($res);

    }

    public function view($id)
    {
        echo Configuration::env('key');
        echo $id;
    }
}