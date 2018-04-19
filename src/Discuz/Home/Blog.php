<?php

namespace Discuz\Home;
use Discuz\Model;

class Blog extends Model
{
    protected $connection = "home";
    protected $table = "blog";
    protected $primaryKey = "blogid";
}