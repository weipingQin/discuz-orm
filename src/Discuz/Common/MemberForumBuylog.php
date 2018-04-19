<?php

namespace Discuz\Common;
use Discuz\Model;

class MemberForumBuylog extends Model
{
    protected $connection = "common";
    protected $table = "member_forum_buylog";
    protected $primaryKey = "uid";
}