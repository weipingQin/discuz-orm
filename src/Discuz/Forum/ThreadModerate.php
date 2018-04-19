<?php

namespace Discuz\Forum;
use Discuz\Model;

class ThreadModerate extends Model
{
    protected $connection = "forum";
    protected $table = "thread_moderate";
    protected $primaryKey = "id";
}