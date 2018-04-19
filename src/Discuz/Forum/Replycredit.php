<?php

namespace Discuz\Forum;
use Discuz\Model;

class Replycredit extends Model
{
    protected $connection = "forum";
    protected $table = "replycredit";
    protected $primaryKey = "tid";
}