<?php

namespace Discuz\Home;
use Discuz\Model;

class Blacklist extends Model
{
    protected $connection = "home";
    protected $table = "blacklist";
    protected $primaryKey = "uid";
}