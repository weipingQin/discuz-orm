<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberValidate extends Model
{
    protected $connection = "common";
    protected $table = "member_validate";
    protected $primaryKey = "uid";
}