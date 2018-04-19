<?php

namespace Discuz\Forum;
use Discuz\Model;

class Debate extends Model
{
    protected $connection = "forum";
    protected $table = "debate";
    protected $primaryKey = "tid";
}