<?php

namespace Discuz\Common;
use Discuz\Model;

class Banned extends Model
{
    protected $connection = "common";
    protected $table = "banned";
    protected $primaryKey = "id";
}