<?php

namespace Discuz\Common;
use Discuz\Model;

class Admingroup extends Model
{
    protected $connection = "common";
    protected $table = "admingroup";
    protected $primaryKey = "admingid";
}