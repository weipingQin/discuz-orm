<?php

namespace Discuz\Home;
use Discuz\Model;

class FeedApp extends Model
{
    protected $connection = "home";
    protected $table = "feed_app";
    protected $primaryKey = "feedid";
}