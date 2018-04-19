<?php

namespace Discuz\Common;
use Discuz\Model;

class Member extends Model
{
    protected $connection = "common";
    protected $table = "member";
    protected $primaryKey = "uid";
}