<?php

namespace Discuz\Common;
use Discuz\Model;

class Block extends Model
{
    protected $connection = "common";
    protected $table = "block";
    protected $primaryKey = "bid";
}