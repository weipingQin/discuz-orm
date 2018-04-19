<?php

namespace Discuz\Common;
use Discuz\Model;

class Mailqueue extends Model
{
    protected $connection = "common";
    protected $table = "mailqueue";
    protected $primaryKey = "qid";
}