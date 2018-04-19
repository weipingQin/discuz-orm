<?php

namespace Discuz\Common;
use Discuz\Model;

class Secquestion extends Model
{
    protected $connection = "common";
    protected $table = "secquestion";
    protected $primaryKey = "id";
}