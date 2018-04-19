<?php

namespace Discuz\Home;
use Discuz\Model;

class FriendRequest extends Model
{
    protected $connection = "home";
    protected $table = "friend_request";
    protected $primaryKey = "uid";
}