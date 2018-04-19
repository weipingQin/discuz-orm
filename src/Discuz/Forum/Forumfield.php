<?php

namespace Discuz\Forum;
use Discuz\Model;

class Forumfield extends Model
{
    protected $connection = "forum";
    protected $table = "forumfield";
    protected $primaryKey = "fid";
}