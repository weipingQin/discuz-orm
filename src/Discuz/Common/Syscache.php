<?php

namespace Discuz\Common;
use Discuz\Model;

class Syscache extends Model
{
    protected $connection = "common";
    protected $table = "syscache";
    protected $primaryKey = "cname";
}