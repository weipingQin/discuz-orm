<?php

namespace Discuz\Portal;
use Discuz\Model;

class Topic extends Model
{
    protected $connection = "portal";
    protected $table = "topic";
    protected $primaryKey = "topicid";
}