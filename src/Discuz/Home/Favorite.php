<?php

namespace Discuz\Home;
use Discuz\Model;

class Favorite extends Model
{
    protected $connection = "home";
    protected $table = "favorite";
    protected $primaryKey = "favid";
}