<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberVerify extends Model
{
    protected $connection = "common";
    protected $table = "member_verify";
    protected $primaryKey = "uid";
}