<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collection extends Model
{
    protected $connection = "forum";
    protected $table = "collection";
    protected $primaryKey = "ctid";
}