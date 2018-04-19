<?php

namespace Discuz\Common;
use Discuz\Model;

class Failedlogin extends Model
{
    protected $connection = "common";
    protected $table = "failedlogin";
    protected $primaryKey = "ip";
}