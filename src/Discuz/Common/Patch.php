<?php

namespace Discuz\Common;
use Discuz\Model;

class Patch extends Model
{
    protected $connection = "common";
    protected $table = "patch";
    protected $primaryKey = "serial";
}