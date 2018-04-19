<?php

namespace Discuz\Common;
use Discuz\Model;

class Process extends Model
{
    protected $connection = "common";
    protected $table = "process";
    protected $primaryKey = "processid";
}