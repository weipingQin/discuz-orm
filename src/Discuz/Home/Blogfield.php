<?php

namespace Discuz\Home;
use Discuz\Model;

class Blogfield extends Model
{
    protected $connection = "home";
    protected $table = "blogfield";
    protected $primaryKey = "blogid";
}