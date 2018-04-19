<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Settings extends Model
{
    protected $connection = "ucenter";
    protected $table = "settings";
    protected $primaryKey = "k";
}