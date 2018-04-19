<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Newpm extends Model
{
    protected $connection = "ucenter";
    protected $table = "newpm";
    protected $primaryKey = "uid";
}