<?php

namespace Discuz\Forum;
use Discuz\Model;

class Sofa extends Model
{
    protected $connection = "forum";
    protected $table = "sofa";
    protected $primaryKey = "tid";
}