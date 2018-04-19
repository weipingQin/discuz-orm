<?php

namespace Discuz\Forum;
use Discuz\Model;

class Postlog extends Model
{
    protected $connection = "forum";
    protected $table = "postlog";
    protected $primaryKey = "pid";
}