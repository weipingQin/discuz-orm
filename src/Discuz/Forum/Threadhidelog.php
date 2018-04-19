<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadhidelog extends Model
{
    protected $connection = "forum";
    protected $table = "threadhidelog";
    protected $primaryKey = "tid";
}