<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Applications extends Model
{
    protected $connection = "ucenter";
    protected $table = "applications";
    protected $primaryKey = "appid";
}