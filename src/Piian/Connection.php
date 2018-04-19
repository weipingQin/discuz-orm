<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/18
 * Time: 下午11:15
 */

namespace Piian;


class Connection
{
    public $config = [];
    private function getConfig()
    {
        $_config = [];
        include './config/config_global.php';
        return $_config;
    }

    public function getConnections()
    {
        $config = $this->getConfig();
        $db = $config['db'][1];
        $database = [
            'driver'    => 'mysql',
            'host'      => $db['dbhost'],
            'database'  => $db['dbname'],
            'username'  => $db['dbuser'],
            'password'  => $db['dbpw'],
            'charset'   => $db['dbcharset'],
            'prefix'    => $db['tablepre'],
        ];
        $names = ['default','common', 'connect', 'forum', 'home', 'mobile', 'portal', 'security', 'ucenter'];
        $connections = [];
        foreach ($names as $name) {
            $connect = $database;
            $connect['prefix'] = ($name == 'default') ? $database['prefix'] :  $database['prefix'] . $name . '_';
            $connections[$name] = $connect;
        }
        return $connections;
    }
}