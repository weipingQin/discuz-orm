<?php

namespace Discuz\Common;
use Discuz\Model;

class UsergroupField extends Model
{
    protected $connection = "common";
    protected $table = "usergroup_field";
    protected $primaryKey = "groupid";
}