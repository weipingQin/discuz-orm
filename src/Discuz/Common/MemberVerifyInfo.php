<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberVerifyInfo extends Model
{
    protected $connection = "common";
    protected $table = "member_verify_info";
    protected $primaryKey = "vid";
}