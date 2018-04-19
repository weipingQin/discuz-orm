<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadtype extends Model
{
    protected $connection = "forum";
    protected $table = "threadtype";
    protected $primaryKey = "typeid";
}