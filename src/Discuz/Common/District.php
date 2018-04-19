<?php

namespace Discuz\Common;
use Discuz\Model;

class District extends Model
{
    protected $connection = "common";
    protected $table = "district";
    protected $primaryKey = "id";
}