<?php

namespace Discuz\Common;
use Discuz\Model;

class CreditRule extends Model
{
    protected $connection = "common";
    protected $table = "credit_rule";
    protected $primaryKey = "rid";
}