<?php

namespace Discuz\Connect;
use Discuz\Model;

class Disktask extends Model
{
    protected $connection = "connect";
    protected $table = "disktask";
    protected $primaryKey = "taskid";
}