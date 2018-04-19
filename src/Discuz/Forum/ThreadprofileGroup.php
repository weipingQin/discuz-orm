<?php

namespace Discuz\Forum;
use Discuz\Model;

class ThreadprofileGroup extends Model
{
    protected $connection = "forum";
    protected $table = "threadprofile_group";
    protected $primaryKey = "gid";
}