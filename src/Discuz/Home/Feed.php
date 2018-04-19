<?php

namespace Discuz\Home;
use Discuz\Model;

class Feed extends Model
{
    protected $connection = "home";
    protected $table = "feed";
    protected $primaryKey = "feedid";
}