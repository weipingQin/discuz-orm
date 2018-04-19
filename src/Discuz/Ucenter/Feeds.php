<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Feeds extends Model
{
    protected $connection = "ucenter";
    protected $table = "feeds";
    protected $primaryKey = "feedid";
}