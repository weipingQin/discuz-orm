<?php

namespace Discuz\Forum;
use Discuz\Model;

class Relatedthread extends Model
{
    protected $connection = "forum";
    protected $table = "relatedthread";
    protected $primaryKey = "tid";
}