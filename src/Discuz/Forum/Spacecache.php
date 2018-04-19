<?php

namespace Discuz\Forum;
use Discuz\Model;

class Spacecache extends Model
{
    protected $connection = "forum";
    protected $table = "spacecache";
    protected $primaryKey = "uid";
}