<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Notelist extends Model
{
    protected $connection = "ucenter";
    protected $table = "notelist";
    protected $primaryKey = "noteid";
}