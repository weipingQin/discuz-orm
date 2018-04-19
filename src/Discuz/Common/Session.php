<?php

namespace Discuz\Common;
use Discuz\Model;

class Session extends Model
{
    protected $connection = "common";
    protected $table = "session";
    protected $primaryKey = "sid";
}