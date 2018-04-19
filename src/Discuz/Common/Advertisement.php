<?php

namespace Discuz\Common;
use Discuz\Model;

class Advertisement extends Model
{
    protected $connection = "common";
    protected $table = "advertisement";
    protected $primaryKey = "advid";
}