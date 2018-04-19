<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberCrime extends Model
{
    protected $connection = "common";
    protected $table = "member_crime";
    protected $primaryKey = "cid";
}