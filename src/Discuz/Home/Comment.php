<?php

namespace Discuz\Home;
use Discuz\Model;

class Comment extends Model
{
    protected $connection = "home";
    protected $table = "comment";
    protected $primaryKey = "cid";
}