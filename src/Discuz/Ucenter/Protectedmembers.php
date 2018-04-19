<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Protectedmembers extends Model
{
    protected $connection = "ucenter";
    protected $table = "protectedmembers";
    protected $primaryKey = "username";
}