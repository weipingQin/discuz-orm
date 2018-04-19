<?php

namespace Discuz\Common;
use Discuz\Model;

class ConnectGuest extends Model
{
    protected $connection = "common";
    protected $table = "connect_guest";
    protected $primaryKey = "conopenid";
}