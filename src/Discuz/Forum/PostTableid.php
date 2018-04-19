<?php

namespace Discuz\Forum;
use Discuz\Model;

class PostTableid extends Model
{
    protected $connection = "forum";
    protected $table = "post_tableid";
    protected $primaryKey = "pid";
}