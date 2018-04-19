<?php

namespace Discuz\Common;
use Discuz\Model;

class Stat extends Model
{
    protected $connection = "common";
    protected $table = "stat";
    protected $primaryKey = "daytime";
}