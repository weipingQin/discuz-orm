<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Memberfields extends Model
{
    protected $connection = "ucenter";
    protected $table = "memberfields";
    protected $primaryKey = "uid";
}