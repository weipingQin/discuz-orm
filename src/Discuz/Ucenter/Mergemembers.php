<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Mergemembers extends Model
{
    protected $connection = "ucenter";
    protected $table = "mergemembers";
    protected $primaryKey = "appid";
}