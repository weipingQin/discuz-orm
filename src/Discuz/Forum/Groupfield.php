<?php

namespace Discuz\Forum;
use Discuz\Model;

class Groupfield extends Model
{
    protected $connection = "forum";
    protected $table = "groupfield";
    protected $primaryKey = "fid";
}