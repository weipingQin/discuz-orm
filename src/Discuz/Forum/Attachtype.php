<?php

namespace Discuz\Forum;
use Discuz\Model;

class Attachtype extends Model
{
    protected $connection = "forum";
    protected $table = "attachtype";
    protected $primaryKey = "id";
}