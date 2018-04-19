<?php

namespace Discuz\Forum;
use Discuz\Model;

class PostModerate extends Model
{
    protected $connection = "forum";
    protected $table = "post_moderate";
    protected $primaryKey = "id";
}