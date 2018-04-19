<?php

namespace Discuz\Forum;
use Discuz\Model;

class Newthread extends Model
{
    protected $connection = "forum";
    protected $table = "newthread";
    protected $primaryKey = "tid";
}