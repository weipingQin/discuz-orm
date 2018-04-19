<?php

namespace Discuz\Common;
use Discuz\Model;

class CreditRuleLogField extends Model
{
    protected $connection = "common";
    protected $table = "credit_rule_log_field";
    protected $primaryKey = "clid";
}