<?php

namespace Discuz\Home;
use Discuz\Model;

class Follow extends Model
{
    protected $connection = "home";
    protected $table = "follow";
    protected $primaryKey = "uid";
}