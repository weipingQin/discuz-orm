<?php

namespace Discuz\Common;
use Discuz\Model;

class AdmincpSession extends Model
{
    protected $connection = "common";
    protected $table = "admincp_session";
    protected $primaryKey = "uid";
}