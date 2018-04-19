<?php

namespace Discuz\Common;
use Discuz\Model;

class Myapp extends Model
{
    protected $connection = "common";
    protected $table = "myapp";
    protected $primaryKey = "appid";
}