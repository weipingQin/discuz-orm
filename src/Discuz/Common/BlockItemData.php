<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockItemData extends Model
{
    protected $connection = "common";
    protected $table = "block_item_data";
    protected $primaryKey = "dataid";
}