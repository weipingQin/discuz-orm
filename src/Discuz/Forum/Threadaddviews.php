<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadaddviews extends Model
{
    protected $connection = "forum";
    protected $table = "threadaddviews";
    protected $primaryKey = "tid";
}