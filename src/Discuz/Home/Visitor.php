<?php

namespace Discuz\Home;
use Discuz\Model;

class Visitor extends Model
{
    protected $connection = "home";
    protected $table = "visitor";
    protected $primaryKey = "uid";
}