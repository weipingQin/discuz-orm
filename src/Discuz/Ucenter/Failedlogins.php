<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Failedlogins extends Model
{
    protected $connection = "ucenter";
    protected $table = "failedlogins";
    protected $primaryKey = "ip";
}