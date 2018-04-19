<?php

namespace Discuz\Home;
use Discuz\Model;

class Show extends Model
{
    protected $connection = "home";
    protected $table = "show";
    protected $primaryKey = "uid";
}