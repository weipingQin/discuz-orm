<?php

namespace Discuz\Common;
use Discuz\Model;

class Pluginvar extends Model
{
    protected $connection = "common";
    protected $table = "pluginvar";
    protected $primaryKey = "pluginvarid";
}