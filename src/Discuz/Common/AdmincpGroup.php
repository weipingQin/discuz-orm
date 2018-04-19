<?php

namespace Discuz\Common;
use Discuz\Model;

class AdmincpGroup extends Model
{
    protected $connection = "common";
    protected $table = "admincp_group";
    protected $primaryKey = "cpgroupid";
}