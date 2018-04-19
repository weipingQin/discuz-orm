<?php

namespace Discuz\Home;
use Discuz\Model;

class Classify extends Model
{
    protected $connection = "home";
    protected $table = "class";
    protected $primaryKey = "classid";
}