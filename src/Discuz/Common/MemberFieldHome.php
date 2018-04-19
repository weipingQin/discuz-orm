<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberFieldHome extends Model
{
    protected $connection = "common";
    protected $table = "member_field_home";
    protected $primaryKey = "uid";
}