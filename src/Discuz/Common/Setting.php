<?php

namespace Discuz\Common;
use Discuz\Model;

class Setting extends Model
{
    protected $connection = "common";
    protected $table = "setting";
    protected $primaryKey = "skey";
}