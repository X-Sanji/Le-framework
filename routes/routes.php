<?php
/**
 * Created by PhpStorm.
 * User: liangxz@szljfkj.com
 * Date: 2017/3/14
 * Time: 13:41
 * 框架路由文件
 * 路由规则都写在这个文件中
 */
use NoahBuscher\Macaw\Macaw;

Macaw::get('/',function(){
    echo 'hello world';
});

Macaw::get('/fuck','App\controllers\demo@index');

Macaw::get('/test','App\controllers\demo@test');

Macaw::get('/view/(:num)','App\controllers\demo@view');

Macaw::dispatch();