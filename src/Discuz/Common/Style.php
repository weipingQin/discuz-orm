<?php

namespace Discuz\Common;
use Discuz\Model;

class Style extends Model
{
    protected $connection = "common";
    protected $table = "style";
    protected $primaryKey = "styleid";
}