<?php

namespace Discuz\Home;
use Discuz\Model;

class Friendlog extends Model
{
    protected $connection = "home";
    protected $table = "friendlog";
    protected $primaryKey = "uid";
}