<?php

namespace Discuz\Common;
use Discuz\Model;

class AdmincpMember extends Model
{
    protected $connection = "common";
    protected $table = "admincp_member";
    protected $primaryKey = "uid";
}