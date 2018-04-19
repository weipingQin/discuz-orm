<?php

namespace Discuz\Home;
use Discuz\Model;

class FollowFeedArchiver extends Model
{
    protected $connection = "home";
    protected $table = "follow_feed_archiver";
    protected $primaryKey = "feedid";
}