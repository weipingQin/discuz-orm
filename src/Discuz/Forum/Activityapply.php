<?php

namespace Discuz\Forum;
use Discuz\Model;

class Activityapply extends Model
{
    protected $connection = "forum";
    protected $table = "activityapply";
    protected $primaryKey = "applyid";
}