<?php

namespace Discuz\Forum;
use Discuz\Model;

class AttachmentExif extends Model
{
    protected $connection = "forum";
    protected $table = "attachment_exif";
    protected $primaryKey = "aid";
}