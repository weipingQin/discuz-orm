<?php

namespace Discuz\Common;
use Discuz\Model;

class Cron extends Model
{
    protected $connection = "common";
    protected $table = "cron";
    protected $primaryKey = "cronid";
}