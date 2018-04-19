<?php

namespace Discuz\Forum;
use Discuz\Model;

class Medal extends Model
{
    protected $connection = "forum";
    protected $table = "medal";
    protected $primaryKey = "medalid";
}