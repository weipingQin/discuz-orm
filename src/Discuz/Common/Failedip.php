<?php

namespace Discuz\Common;
use Discuz\Model;

class Failedip extends Model
{
    protected $connection = "common";
    protected $table = "failedip";
    protected $primaryKey = "ip";
}