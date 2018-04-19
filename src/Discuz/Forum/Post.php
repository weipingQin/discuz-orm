<?php

namespace Discuz\Forum;
use Discuz\Model;

class Post extends Model
{
    protected $connection = "forum";
    protected $table = "post";
    protected $primaryKey = "tid";
}