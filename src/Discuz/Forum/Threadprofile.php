<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadprofile extends Model
{
    protected $connection = "forum";
    protected $table = "threadprofile";
    protected $primaryKey = "id";
}