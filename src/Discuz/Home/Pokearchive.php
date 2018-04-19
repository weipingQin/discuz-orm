<?php

namespace Discuz\Home;
use Discuz\Model;

class Pokearchive extends Model
{
    protected $connection = "home";
    protected $table = "pokearchive";
    protected $primaryKey = "pid";
}