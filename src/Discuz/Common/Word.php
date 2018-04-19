<?php

namespace Discuz\Common;
use Discuz\Model;

class Word extends Model
{
    protected $connection = "common";
    protected $table = "word";
    protected $primaryKey = "id";
}