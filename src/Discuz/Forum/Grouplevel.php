<?php

namespace Discuz\Forum;
use Discuz\Model;

class Grouplevel extends Model
{
    protected $connection = "forum";
    protected $table = "grouplevel";
    protected $primaryKey = "levelid";
}