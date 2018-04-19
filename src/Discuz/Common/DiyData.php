<?php

namespace Discuz\Common;
use Discuz\Model;

class DiyData extends Model
{
    protected $connection = "common";
    protected $table = "diy_data";
    protected $primaryKey = "targettplname";
}