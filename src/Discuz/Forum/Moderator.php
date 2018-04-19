<?php

namespace Discuz\Forum;
use Discuz\Model;

class Moderator extends Model
{
    protected $connection = "forum";
    protected $table = "moderator";
    protected $primaryKey = "uid";
}