<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockItem extends Model
{
    protected $connection = "common";
    protected $table = "block_item";
    protected $primaryKey = "itemid";
}