<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collectioncomment extends Model
{
    protected $connection = "forum";
    protected $table = "collectioncomment";
    protected $primaryKey = "cid";
}