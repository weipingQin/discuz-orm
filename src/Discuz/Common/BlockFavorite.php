<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockFavorite extends Model
{
    protected $connection = "common";
    protected $table = "block_favorite";
    protected $primaryKey = "favid";
}