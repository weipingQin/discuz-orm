<?php

namespace Discuz\Home;
use Discuz\Model;

class Pic extends Model
{
    protected $connection = "home";
    protected $table = "pic";
    protected $primaryKey = "picid";
}