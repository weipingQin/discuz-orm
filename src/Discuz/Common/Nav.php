<?php

namespace Discuz\Common;
use Discuz\Model;

class Nav extends Model
{
    protected $connection = "common";
    protected $table = "nav";
    protected $primaryKey = "id";
}