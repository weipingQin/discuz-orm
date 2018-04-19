<?php

namespace Discuz\Common;
use Discuz\Model;

class Smiley extends Model
{
    protected $connection = "common";
    protected $table = "smiley";
    protected $primaryKey = "id";
}