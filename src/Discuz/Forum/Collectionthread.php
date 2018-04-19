<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collectionthread extends Model
{
    protected $connection = "forum";
    protected $table = "collectionthread";
    protected $primaryKey = "ctid";
}