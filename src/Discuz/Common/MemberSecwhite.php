<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberSecwhite extends Model
{
    protected $connection = "common";
    protected $table = "member_secwhite";
    protected $primaryKey = "uid";
}