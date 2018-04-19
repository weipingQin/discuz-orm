<?php

namespace Discuz\Common;
use Discuz\Model;

class Friendlink extends Model
{
    protected $connection = "common";
    protected $table = "friendlink";
    protected $primaryKey = "id";
}