<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collectionfollow extends Model
{
    protected $connection = "forum";
    protected $table = "collectionfollow";
    protected $primaryKey = "uid";
}