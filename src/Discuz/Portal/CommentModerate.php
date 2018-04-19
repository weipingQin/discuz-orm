<?php

namespace Discuz\Portal;
use Discuz\Model;

class CommentModerate extends Model
{
    protected $connection = "portal";
    protected $table = "comment_moderate";
    protected $primaryKey = "id";
}