<?php

namespace Discuz\Connect;
use Discuz\Model;

class Tthreadlog extends Model
{
    protected $connection = "connect";
    protected $table = "tthreadlog";
    protected $primaryKey = "twid";
}