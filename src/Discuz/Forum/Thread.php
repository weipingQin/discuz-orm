<?php

namespace Discuz\Forum;
use Discuz\Model;

class Thread extends Model
{
    protected $connection = "forum";
    protected $table = "thread";
    protected $primaryKey = "tid";
}