<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/18
 * Time: 下午11:56
 */

namespace Discuz;
use Illuminate\Database\Eloquent\Model as EloModel;
use Illuminate\Database\Capsule\Manager as Capsule;
use Piian\Connection;

class CommonModel extends EloModel
{
    public function createTableName()
    {
        $class = self::getClass();
        $dstr = preg_replace_callback('/([A-Z]+)/',function($matchs)
        {
            return '_'.strtolower($matchs[0]);
        },$class);
        return trim(preg_replace('/_{2,}/','_',$dstr),'_');
    }
    public function __construct()
    {
        $this->table = $this->createTableName();
        dump(1);

        if ($this->primaryKey == 'id') {
            $prefix = $this->getConnection()->getTablePrefix();
            $col = Capsule::select('SHOW COLUMNS FROM ' . $prefix . $this->table);
            $this->primaryKey = $col[0]->Field;
        }
    }

    public static function getClass() {
        $calledClass = get_called_class();
        $classArray = explode("\\", $calledClass);
        return array_pop($classArray);
    }

    public $timestamps = false;
}