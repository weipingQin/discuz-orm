<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberCount extends Model
{
    protected $connection = "common";
    protected $table = "member_count";
    protected $primaryKey = "uid";
}