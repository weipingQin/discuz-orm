<?php

namespace Discuz\Forum;
use Discuz\Model;

class Debatepost extends Model
{
    protected $connection = "forum";
    protected $table = "debatepost";
    protected $primaryKey = "pid";
}