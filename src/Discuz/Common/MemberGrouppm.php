<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberGrouppm extends Model
{
    protected $connection = "common";
    protected $table = "member_grouppm";
    protected $primaryKey = "uid";
}