<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadhot extends Model
{
    protected $connection = "forum";
    protected $table = "threadhot";
    protected $primaryKey = "cid";
}