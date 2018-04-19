<?php

namespace Discuz\Forum;
use Discuz\Model;

class Warning extends Model
{
    protected $connection = "forum";
    protected $table = "warning";
    protected $primaryKey = "wid";
}