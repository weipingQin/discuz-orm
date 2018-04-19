<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberProfileSetting extends Model
{
    protected $connection = "common";
    protected $table = "member_profile_setting";
    protected $primaryKey = "fieldid";
}