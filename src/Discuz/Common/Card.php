<?php

namespace Discuz\Common;
use Discuz\Model;

class Card extends Model
{
    protected $connection = "common";
    protected $table = "card";
    protected $primaryKey = "id";
}