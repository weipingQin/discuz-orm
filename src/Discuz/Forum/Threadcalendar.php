<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadcalendar extends Model
{
    protected $connection = "forum";
    protected $table = "threadcalendar";
    protected $primaryKey = "cid";
}