<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberSecurity extends Model
{
    protected $connection = "common";
    protected $table = "member_security";
    protected $primaryKey = "securityid";
}