<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberMagic extends Model
{
    protected $connection = "common";
    protected $table = "member_magic";
    protected $primaryKey = "uid";
}