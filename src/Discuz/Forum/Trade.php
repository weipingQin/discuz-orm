<?php

namespace Discuz\Forum;
use Discuz\Model;

class Trade extends Model
{
    protected $connection = "forum";
    protected $table = "trade";
    protected $primaryKey = "tid";
}