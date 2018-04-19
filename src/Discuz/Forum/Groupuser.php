<?php

namespace Discuz\Forum;
use Discuz\Model;

class Groupuser extends Model
{
    protected $connection = "forum";
    protected $table = "groupuser";
    protected $primaryKey = "fid";
}