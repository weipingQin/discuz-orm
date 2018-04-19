<?php

namespace Discuz\Mobile;
use Discuz\Model;

class Setting extends Model
{
    protected $connection = "mobile";
    protected $table = "setting";
    protected $primaryKey = "skey";
}