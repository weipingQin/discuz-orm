<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberNewprompt extends Model
{
    protected $connection = "common";
    protected $table = "member_newprompt";
    protected $primaryKey = "uid";
}