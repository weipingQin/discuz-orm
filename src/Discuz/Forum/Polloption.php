<?php

namespace Discuz\Forum;
use Discuz\Model;

class Polloption extends Model
{
    protected $connection = "forum";
    protected $table = "polloption";
    protected $primaryKey = "polloptionid";
}