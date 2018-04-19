<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberMedal extends Model
{
    protected $connection = "common";
    protected $table = "member_medal";
    protected $primaryKey = "uid";
}