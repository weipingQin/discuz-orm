<?php

namespace Discuz\Common;
use Discuz\Model;

class AdmincpPerm extends Model
{
    protected $connection = "common";
    protected $table = "admincp_perm";
    protected $primaryKey = "cpgroupid";
}