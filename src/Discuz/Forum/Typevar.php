<?php

namespace Discuz\Forum;
use Discuz\Model;

class Typevar extends Model
{
    protected $connection = "forum";
    protected $table = "typevar";
    protected $primaryKey = "sortid";
}