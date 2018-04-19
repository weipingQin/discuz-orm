<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadrush extends Model
{
    protected $connection = "forum";
    protected $table = "threadrush";
    protected $primaryKey = "tid";
}