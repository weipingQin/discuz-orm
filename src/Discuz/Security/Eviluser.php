<?php

namespace Discuz\Security;
use Discuz\Model;

class Eviluser extends Model
{
    protected $connection = "security";
    protected $table = "eviluser";
    protected $primaryKey = "uid";
}