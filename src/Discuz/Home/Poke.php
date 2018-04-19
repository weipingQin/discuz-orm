<?php

namespace Discuz\Home;
use Discuz\Model;

class Poke extends Model
{
    protected $connection = "home";
    protected $table = "poke";
    protected $primaryKey = "uid";
}