<?php

namespace Discuz\Security;
use Discuz\Model;

class Evilpost extends Model
{
    protected $connection = "security";
    protected $table = "evilpost";
    protected $primaryKey = "pid";
}