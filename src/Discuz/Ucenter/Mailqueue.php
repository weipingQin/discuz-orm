<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Mailqueue extends Model
{
    protected $connection = "ucenter";
    protected $table = "mailqueue";
    protected $primaryKey = "mailid";
}