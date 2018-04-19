<?php

namespace Discuz\Forum;
use Discuz\Model;

class Attachment extends Model
{
    protected $connection = "forum";
    protected $table = "attachment";
    protected $primaryKey = "aid";
}