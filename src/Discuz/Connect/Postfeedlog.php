<?php

namespace Discuz\Connect;
use Discuz\Model;

class Postfeedlog extends Model
{
    protected $connection = "connect";
    protected $table = "postfeedlog";
    protected $primaryKey = "flid";
}