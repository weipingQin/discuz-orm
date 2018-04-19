<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Admins extends Model
{
    protected $connection = "ucenter";
    protected $table = "admins";
    protected $primaryKey = "uid";
}