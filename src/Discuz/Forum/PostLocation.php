<?php

namespace Discuz\Forum;
use Discuz\Model;

class PostLocation extends Model
{
    protected $connection = "forum";
    protected $table = "post_location";
    protected $primaryKey = "pid";
}