<?php

namespace Discuz\Common;
use Discuz\Model;

class Task extends Model
{
    protected $connection = "common";
    protected $table = "task";
    protected $primaryKey = "taskid";
}