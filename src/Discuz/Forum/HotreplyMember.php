<?php

namespace Discuz\Forum;
use Discuz\Model;

class HotreplyMember extends Model
{
    protected $connection = "forum";
    protected $table = "hotreply_member";
    protected $primaryKey = "pid";
}