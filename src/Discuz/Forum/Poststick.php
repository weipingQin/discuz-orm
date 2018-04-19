<?php

namespace Discuz\Forum;
use Discuz\Model;

class Poststick extends Model
{
    protected $connection = "forum";
    protected $table = "poststick";
    protected $primaryKey = "tid";
}