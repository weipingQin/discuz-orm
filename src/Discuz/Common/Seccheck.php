<?php

namespace Discuz\Common;
use Discuz\Model;

class Seccheck extends Model
{
    protected $connection = "common";
    protected $table = "seccheck";
    protected $primaryKey = "ssid";
}