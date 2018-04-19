<?php

namespace Discuz\Common;
use Discuz\Model;

class Usergroup extends Model
{
    protected $connection = "common";
    protected $table = "usergroup";
    protected $primaryKey = "groupid";
}