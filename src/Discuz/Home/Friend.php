<?php

namespace Discuz\Home;
use Discuz\Model;

class Friend extends Model
{
    protected $connection = "home";
    protected $table = "friend";
    protected $primaryKey = "uid";
}