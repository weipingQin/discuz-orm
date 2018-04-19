<?php

namespace Discuz\Forum;
use Discuz\Model;

class Typeoption extends Model
{
    protected $connection = "forum";
    protected $table = "typeoption";
    protected $primaryKey = "optionid";
}