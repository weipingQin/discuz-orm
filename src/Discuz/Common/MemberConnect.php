<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberConnect extends Model
{
    protected $connection = "common";
    protected $table = "member_connect";
    protected $primaryKey = "uid";
}