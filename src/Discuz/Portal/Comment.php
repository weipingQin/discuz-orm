<?php

namespace Discuz\Portal;
use Discuz\Model;

class Comment extends Model
{
    protected $connection = "portal";
    protected $table = "comment";
    protected $primaryKey = "cid";
}