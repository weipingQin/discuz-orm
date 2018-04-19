<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockPermission extends Model
{
    protected $connection = "common";
    protected $table = "block_permission";
    protected $primaryKey = "bid";
}