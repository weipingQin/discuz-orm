<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/18
 * Time: 下午10:57
 */
namespace Discuz\Common;
class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'uid';
//    public function __construct()
//    {
//        parent::__construct();
//    }

    public function name()
    {
        echo 'name';
    }
}