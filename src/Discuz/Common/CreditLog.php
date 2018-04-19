<?php

namespace Discuz\Common;
use Discuz\Model;

class CreditLog extends Model
{
    protected $connection = "common";
    protected $table = "credit_log";
    protected $primaryKey = "logid";
}