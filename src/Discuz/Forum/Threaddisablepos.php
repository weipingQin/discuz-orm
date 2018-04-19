<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threaddisablepos extends Model
{
    protected $connection = "forum";
    protected $table = "threaddisablepos";
    protected $primaryKey = "tid";
}