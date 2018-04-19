<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberStatus extends Model
{
    protected $connection = "common";
    protected $table = "member_status";
    protected $primaryKey = "uid";
}