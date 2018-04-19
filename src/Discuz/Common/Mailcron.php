<?php

namespace Discuz\Common;
use Discuz\Model;

class Mailcron extends Model
{
    protected $connection = "common";
    protected $table = "mailcron";
    protected $primaryKey = "cid";
}