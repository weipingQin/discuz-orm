<?php

namespace Discuz\Common;
use Discuz\Model;

class Sphinxcounter extends Model
{
    protected $connection = "common";
    protected $table = "sphinxcounter";
    protected $primaryKey = "indexid";
}