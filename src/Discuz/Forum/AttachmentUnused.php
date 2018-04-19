<?php

namespace Discuz\Forum;
use Discuz\Model;

class AttachmentUnused extends Model
{
    protected $connection = "forum";
    protected $table = "attachment_unused";
    protected $primaryKey = "aid";
}