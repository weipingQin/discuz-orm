<?php
/**
 * Created by PhpStorm.
 * User: pan
 * Date: 2018/4/18
 * Time: 下午11:55
 */

namespace Discuz\Forum;
use Discuz\CommonModel;

class Model extends CommonModel
{
    protected $connection = 'forum';

    public function __construct()
    {
        parent::__construct();
    }
}