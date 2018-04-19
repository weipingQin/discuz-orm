<?php

namespace Discuz\Forum;
use Discuz\Model;

class Imagetype extends Model
{
    protected $connection = "forum";
    protected $table = "imagetype";
    protected $primaryKey = "typeid";
}