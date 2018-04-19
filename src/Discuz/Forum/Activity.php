<?php

namespace Discuz\Forum;
use Discuz\Model;

class Activity extends Model
{
    protected $connection = "forum";
    protected $table = "activity";
    protected $primaryKey = "tid";
}