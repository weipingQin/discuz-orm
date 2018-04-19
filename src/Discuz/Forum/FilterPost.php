<?php

namespace Discuz\Forum;
use Discuz\Model;

class FilterPost extends Model
{
    protected $connection = "forum";
    protected $table = "filter_post";
    protected $primaryKey = "tid";
}