<?php

namespace Discuz\Forum;
use Discuz\Model;

class Attachment2 extends Model
{
    protected $connection = "forum";
    protected $table = "attachment_2";
    protected $primaryKey = "aid";
}