<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberProfile extends Model
{
    protected $connection = "common";
    protected $table = "member_profile";
    protected $primaryKey = "uid";
}