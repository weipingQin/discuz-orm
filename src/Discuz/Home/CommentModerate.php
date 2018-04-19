<?php

namespace Discuz\Home;
use Discuz\Model;

class CommentModerate extends Model
{
    protected $connection = "home";
    protected $table = "comment_moderate";
    protected $primaryKey = "id";
}