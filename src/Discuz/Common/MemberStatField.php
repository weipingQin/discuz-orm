<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberStatField extends Model
{
    protected $connection = "common";
    protected $table = "member_stat_field";
    protected $primaryKey = "optionid";
}