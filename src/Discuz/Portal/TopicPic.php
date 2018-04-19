<?php

namespace Discuz\Portal;
use Discuz\Model;

class TopicPic extends Model
{
    protected $connection = "portal";
    protected $table = "topic_pic";
    protected $primaryKey = "picid";
}