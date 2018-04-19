<?php

namespace Discuz\Common;
use Discuz\Model;

class Tagitem extends Model
{
    protected $connection = "common";
    protected $table = "tagitem";
    protected $primaryKey = "tagid";
}