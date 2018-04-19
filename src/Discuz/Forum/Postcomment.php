<?php

namespace Discuz\Forum;
use Discuz\Model;

class Postcomment extends Model
{
    protected $connection = "forum";
    protected $table = "postcomment";
    protected $primaryKey = "id";
}