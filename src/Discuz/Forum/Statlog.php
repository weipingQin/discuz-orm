<?php

namespace Discuz\Forum;
use Discuz\Model;

class Statlog extends Model
{
    protected $connection = "forum";
    protected $table = "statlog";
    protected $primaryKey = "logdate";
}