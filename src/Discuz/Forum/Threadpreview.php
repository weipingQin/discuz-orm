<?php

namespace Discuz\Forum;
use Discuz\Model;

class Threadpreview extends Model
{
    protected $connection = "forum";
    protected $table = "threadpreview";
    protected $primaryKey = "tid";
}