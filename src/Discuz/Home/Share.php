<?php

namespace Discuz\Home;
use Discuz\Model;

class Share extends Model
{
    protected $connection = "home";
    protected $table = "share";
    protected $primaryKey = "sid";
}