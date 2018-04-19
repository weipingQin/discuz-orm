<?php

namespace Discuz\Home;
use Discuz\Model;

class Click extends Model
{
    protected $connection = "home";
    protected $table = "click";
    protected $primaryKey = "clickid";
}