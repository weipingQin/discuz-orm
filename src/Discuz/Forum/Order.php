<?php

namespace Discuz\Forum;
use Discuz\Model;

class Order extends Model
{
    protected $connection = "forum";
    protected $table = "order";
    protected $primaryKey = "orderid";
}