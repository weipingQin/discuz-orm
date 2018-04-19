<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberLog extends Model
{
    protected $connection = "common";
    protected $table = "member_log";
    protected $primaryKey = "uid";
}