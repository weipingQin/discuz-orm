<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockStyle extends Model
{
    protected $connection = "common";
    protected $table = "block_style";
    protected $primaryKey = "styleid";
}