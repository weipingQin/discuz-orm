<?php

namespace Discuz\Common;
use Discuz\Model;

class WordType extends Model
{
    protected $connection = "common";
    protected $table = "word_type";
    protected $primaryKey = "id";
}