<?php

namespace Discuz\Common;
use Discuz\Model;

class Visit extends Model
{
    protected $connection = "common";
    protected $table = "visit";
    protected $primaryKey = "ip";
}