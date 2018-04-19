<?php

namespace Discuz\Forum;
use Discuz\Model;

class Promotion extends Model
{
    protected $connection = "forum";
    protected $table = "promotion";
    protected $primaryKey = "ip";
}