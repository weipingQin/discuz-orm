<?php

namespace Discuz\Forum;
use Discuz\Model;

class Postcache extends Model
{
    protected $connection = "forum";
    protected $table = "postcache";
    protected $primaryKey = "pid";
}