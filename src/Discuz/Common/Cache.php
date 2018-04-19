<?php

namespace Discuz\Common;
use Discuz\Model;

class Cache extends Model
{
    protected $connection = "common";
    protected $table = "cache";
    protected $primaryKey = "cachekey";
}