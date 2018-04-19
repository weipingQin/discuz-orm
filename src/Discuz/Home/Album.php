<?php

namespace Discuz\Home;
use Discuz\Model;

class Album extends Model
{
    protected $connection = "home";
    protected $table = "album";
    protected $primaryKey = "albumid";
}