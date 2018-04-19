<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberWechatmp extends Model
{
    protected $connection = "common";
    protected $table = "member_wechatmp";
    protected $primaryKey = "uid";
}