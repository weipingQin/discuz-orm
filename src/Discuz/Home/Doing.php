<?php

namespace Discuz\Home;
use Discuz\Model;

class Doing extends Model
{
    protected $connection = "home";
    protected $table = "doing";
    protected $primaryKey = "doid";
}