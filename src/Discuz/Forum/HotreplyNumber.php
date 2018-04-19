<?php

namespace Discuz\Forum;
use Discuz\Model;

class HotreplyNumber extends Model
{
    protected $connection = "forum";
    protected $table = "hotreply_number";
    protected $primaryKey = "pid";
}