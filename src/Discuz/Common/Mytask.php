<?php

namespace Discuz\Common;
use Discuz\Model;

class Mytask extends Model
{
    protected $connection = "common";
    protected $table = "mytask";
    protected $primaryKey = "uid";
}