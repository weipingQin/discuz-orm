<?php

namespace Discuz\Common;
use Discuz\Model;

class Template extends Model
{
    protected $connection = "common";
    protected $table = "template";
    protected $primaryKey = "templateid";
}