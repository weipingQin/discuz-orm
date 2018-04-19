<?php

namespace Discuz\Forum;
use Discuz\Model;

class Collectionrelated extends Model
{
    protected $connection = "forum";
    protected $table = "collectionrelated";
    protected $primaryKey = "tid";
}