<?php

namespace Discuz\Common;
use Discuz\Model;

class CardType extends Model
{
    protected $connection = "common";
    protected $table = "card_type";
    protected $primaryKey = "id";
}