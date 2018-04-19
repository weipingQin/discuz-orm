<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberWechat extends Model
{
    protected $connection = "common";
    protected $table = "member_wechat";
    protected $primaryKey = "uid";
}