<?php

namespace Discuz\Home;
use Discuz\Model;

class FollowFeed extends Model
{
    protected $connection = "home";
    protected $table = "follow_feed";
    protected $primaryKey = "feedid";
}