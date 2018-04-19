<?php

namespace Discuz\Common;
use Discuz\Model;

class Onlinetime extends Model
{
    protected $connection = "common";
    protected $table = "onlinetime";
    protected $primaryKey = "uid";
}