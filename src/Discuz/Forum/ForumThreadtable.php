<?php

namespace Discuz\Forum;
use Discuz\Model;

class ForumThreadtable extends Model
{
    protected $connection = "forum";
    protected $table = "forum_threadtable";
    protected $primaryKey = "fid";
}