<?php

namespace Discuz\Common;
use Discuz\Model;

class Tag extends Model
{
    protected $connection = "common";
    protected $table = "tag";
    protected $primaryKey = "tagid";
}