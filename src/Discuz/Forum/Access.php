<?php

namespace Discuz\Forum;
use Discuz\Model;

class Access extends Model
{
    protected $connection = "forum";
    protected $table = "access";
    protected $primaryKey = "uid";
}