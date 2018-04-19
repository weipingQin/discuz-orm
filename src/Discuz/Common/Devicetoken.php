<?php

namespace Discuz\Common;
use Discuz\Model;

class Devicetoken extends Model
{
    protected $connection = "common";
    protected $table = "devicetoken";
    protected $primaryKey = "uid";
}