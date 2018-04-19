<?php

namespace Discuz\Common;
use Discuz\Model;

class Stylevar extends Model
{
    protected $connection = "common";
    protected $table = "stylevar";
    protected $primaryKey = "stylevarid";
}