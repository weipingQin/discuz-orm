<?php

namespace Discuz\Common;
use Discuz\Model;

class CardLog extends Model
{
    protected $connection = "common";
    protected $table = "card_log";
    protected $primaryKey = "id";
}