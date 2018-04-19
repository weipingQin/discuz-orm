<?php

namespace Discuz\Common;
use Discuz\Model;

class AdmincpCmenu extends Model
{
    protected $connection = "common";
    protected $table = "admincp_cmenu";
    protected $primaryKey = "id";
}