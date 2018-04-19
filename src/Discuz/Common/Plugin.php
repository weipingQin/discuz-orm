<?php

namespace Discuz\Common;
use Discuz\Model;

class Plugin extends Model
{
    protected $connection = "common";
    protected $table = "plugin";
    protected $primaryKey = "pluginid";
}