<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberActionLog extends Model
{
    protected $connection = "common";
    protected $table = "member_action_log";
    protected $primaryKey = "id";
}