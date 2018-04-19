<?php

namespace Discuz\Mobile;
use Discuz\Model;

class WsqThreadlist extends Model
{
    protected $connection = "mobile";
    protected $table = "wsq_threadlist";
    protected $primaryKey = "skey";
}