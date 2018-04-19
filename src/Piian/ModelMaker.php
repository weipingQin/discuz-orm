<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/19
 * Time: 下午9:35
 */
namespace Piian;

use Illuminate\Database\Capsule\Manager as Capsule;
use function PHPSTORM_META\type;


class ModelMaker {

    public function test($namespace = 'App')
    {
        $tables = $this->getTables();
        foreach ($tables as $table) {
            $baseName = $table->Tables_in_ultrax;
            $nameData = $this->getClassName($baseName, $namespace);
            $key = $this->getPrimaryKey($baseName);
            if ($key) {
                $nameData::find(1);
            }
        }
    }

    public function create($namespace = 'App', $src = '')
    {
        $tables = $this->getTables();
        $this->mkdirs($namespace);
        foreach ($tables as $table) {
            $baseName = array_first($table);
            $nameData = $this->getNameData($baseName, $namespace, $src);
            $this->mkPath($nameData['path']);
            if (!file_exists($nameData['file'])) {
                $contents = $this->getContents($nameData);
                file_put_contents($nameData['file'], $contents);
            }
        }
    }

    function mkdirs($path){
        if(!is_dir($path)){
            $this->mkdirs(dirname($path));
            if(!mkdir($path, 0777)){
                return false;
            }
        }
        return true;
    }

    public function getClassName($base, $namespace)
    {
        $names = explode('_', $base);
        $type = $names[1];
        $baseArr = [];
        foreach ($names as $k => $name) {
            if ($k >1) {
                $tableArr[] = $name;
                $baseArr[] = ucfirst($name);
            }
        }
        $Name = implode($baseArr);
        $Name = $Name == 'Class' ? 'Classify' :$Name;
        return ucfirst($namespace).'\\'.ucfirst($type) . '\\'.ucfirst($Name);
    }

    public function getNameData($base, $namespace, $src = '')
    {
        $names = explode('_', $base);
        $type = $names[1];
        $baseArr = [];
        $tableArr = [];
        foreach ($names as $k => $name) {
            if ($k >1) {
                $tableArr[] = $name;
                $baseArr[] = ucfirst($name);
            }
        }
        $class = implode($baseArr);
        $class = $class == 'Class' ? 'Classify' : $class;
        $tableName = implode('_', $tableArr);
        $path = $src . ucfirst($namespace) . '/' . ucfirst($type);
        $file = $path.'/'.$class.'.php';
        $primaryKey = $this->getPrimaryKey($base);

        return [
            'namespace' => ucfirst($namespace).'\\'.ucfirst($type),
            'connection' => $type,
            'table' => $tableName,
            'class' => $class,
            'primaryKey' => $primaryKey,
            'baseName' => $base,
            'path' => $path,
            'file' => $file
        ];
    }

    public function getTables()
    {
        return Capsule::select('show tables');
    }

    private function getPrimaryKey($base)
    {
        $fields = Capsule::select('SHOW COLUMNS FROM  '. $base);
        foreach ($fields as $field) {
            if ($field->Key == 'PRI') {
               return $field->Field;
            }
        }
        return '';
    }

    private function mkPath($path)
    {
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
    }

    private function getContents($nameData)
    {
        $contents = file_get_contents('default.php');
        foreach ($nameData as $field => $value) {
            if ($value){
                $contents = str_replace('__'.$field.'__', $nameData[$field] ,$contents);
            } else {
                $contents = str_replace('protected $primaryKey = "__primaryKey__";', '' , $contents);
            }
        }
        return $contents;
    }
}