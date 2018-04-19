<?php

namespace Discuz\Common;
use Discuz\Model;

class UinBlack extends Model
{
    protected $connection = "common";
    protected $table = "uin_black";
    protected $primaryKey = "uin";
}