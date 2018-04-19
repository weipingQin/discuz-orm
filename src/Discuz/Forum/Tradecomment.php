<?php

namespace Discuz\Forum;
use Discuz\Model;

class Tradecomment extends Model
{
    protected $connection = "forum";
    protected $table = "tradecomment";
    protected $primaryKey = "id";
}