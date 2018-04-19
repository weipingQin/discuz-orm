<?php

namespace Discuz\Common;
use Discuz\Model;

class Searchindex extends Model
{
    protected $connection = "common";
    protected $table = "searchindex";
    protected $primaryKey = "searchid";
}