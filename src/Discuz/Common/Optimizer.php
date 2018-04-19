<?php

namespace Discuz\Common;
use Discuz\Model;

class Optimizer extends Model
{
    protected $connection = "common";
    protected $table = "optimizer";
    protected $primaryKey = "k";
}