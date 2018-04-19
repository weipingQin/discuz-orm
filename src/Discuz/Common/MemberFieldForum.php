<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberFieldForum extends Model
{
    protected $connection = "common";
    protected $table = "member_field_forum";
    protected $primaryKey = "uid";
}