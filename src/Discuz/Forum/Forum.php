<?php

namespace Discuz\Forum;
use Discuz\Model;

class Forum extends Model
{
    protected $connection = "forum";
    protected $table = "forum";
    protected $primaryKey = "fid";
}