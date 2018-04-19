<?php

namespace Discuz\Common;
use Discuz\Model;

class BlockPic extends Model
{
    protected $connection = "common";
    protected $table = "block_pic";
    protected $primaryKey = "picid";
}