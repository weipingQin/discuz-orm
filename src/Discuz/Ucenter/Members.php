<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Members extends Model
{
    protected $connection = "ucenter";
    protected $table = "members";
    protected $primaryKey = "uid";
}