<?php

namespace Discuz\Common;
use Discuz\Model;

class Taskvar extends Model
{
    protected $connection = "common";
    protected $table = "taskvar";
    protected $primaryKey = "taskvarid";
}