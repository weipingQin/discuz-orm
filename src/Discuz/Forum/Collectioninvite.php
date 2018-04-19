<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collectioninvite extends Model
{
    protected $connection = "forum";
    protected $table = "collectioninvite";
    protected $primaryKey = "ctid";
}