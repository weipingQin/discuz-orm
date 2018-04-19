<?php

namespace Discuz\Common;
use Discuz\Model;

class Adminnote extends Model
{
    protected $connection = "common";
    protected $table = "adminnote";
    protected $primaryKey = "id";
}