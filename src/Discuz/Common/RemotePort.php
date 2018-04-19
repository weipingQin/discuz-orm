<?php

namespace Discuz\Common;
use Discuz\Model;

class RemotePort extends Model
{
    protected $connection = "common";
    protected $table = "remote_port";
    protected $primaryKey = "id";
}