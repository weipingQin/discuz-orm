<?php

namespace Discuz\Forum;
use Discuz\Model;

class Tradelog extends Model
{
    protected $connection = "forum";
    protected $table = "tradelog";
    protected $primaryKey = "orderid";
}