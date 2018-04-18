<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/18
 * Time: 下午11:07
 */

namespace Piian;
use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;

class Boot
{


    public static function init()
    {
        $config = new Connection();
        $connections = $config->getConnections();

        $capsule = new Capsule;

        // 创建链接
        foreach ($connections as $name => $connection) {
            $capsule->addConnection($connection, $name);
        }

        // 设置全局静态可访问
        $capsule->setAsGlobal();

        // 启动Eloquent
        $capsule->bootEloquent();
    }
}