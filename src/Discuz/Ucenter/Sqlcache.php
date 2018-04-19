<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Sqlcache extends Model
{
    protected $connection = "ucenter";
    protected $table = "sqlcache";
    protected $primaryKey = "sqlid";
}