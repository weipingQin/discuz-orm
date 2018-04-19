<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadclass extends Model
{
    protected $connection = "forum";
    protected $table = "threadclass";
    protected $primaryKey = "typeid";
}