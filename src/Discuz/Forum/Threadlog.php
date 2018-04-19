<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadlog extends Model
{
    protected $connection = "forum";
    protected $table = "threadlog";
    protected $primaryKey = "tid";
}