<?php

namespace Discuz\Forum;
use Discuz\Model;

class Rsscache extends Model
{
    protected $connection = "forum";
    protected $table = "rsscache";
    protected $primaryKey = "tid";
}