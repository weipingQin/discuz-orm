<?php

namespace Discuz\Connect;
use Discuz\Model;

class Feedlog extends Model
{
    protected $connection = "connect";
    protected $table = "feedlog";
    protected $primaryKey = "flid";
}