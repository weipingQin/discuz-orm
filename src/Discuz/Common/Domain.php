<?php

namespace Discuz\Common;
use Discuz\Model;

class Domain extends Model
{
    protected $connection = "common";
    protected $table = "domain";
    protected $primaryKey = "id";
}