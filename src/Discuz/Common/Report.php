<?php

namespace Discuz\Common;
use Discuz\Model;

class Report extends Model
{
    protected $connection = "common";
    protected $table = "report";
    protected $primaryKey = "id";
}