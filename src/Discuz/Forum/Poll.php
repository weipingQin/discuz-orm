<?php

namespace Discuz\Forum;
use Discuz\Model;

class Poll extends Model
{
    protected $connection = "forum";
    protected $table = "poll";
    protected $primaryKey = "tid";
}