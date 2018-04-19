<?php

namespace Discuz\Common;
use Discuz\Model;

class CreditRuleLog extends Model
{
    protected $connection = "common";
    protected $table = "credit_rule_log";
    protected $primaryKey = "clid";
}