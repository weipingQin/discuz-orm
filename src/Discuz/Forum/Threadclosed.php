<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadclosed extends Model
{
    protected $connection = "forum";
    protected $table = "threadclosed";
    protected $primaryKey = "tid";
}