<?php

namespace Discuz\Common;
use Discuz\Model;

class Magic extends Model
{
    protected $connection = "common";
    protected $table = "magic";
    protected $primaryKey = "magicid";
}