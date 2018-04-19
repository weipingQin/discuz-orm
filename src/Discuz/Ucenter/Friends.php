<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Friends extends Model
{
    protected $connection = "ucenter";
    protected $table = "friends";
    protected $primaryKey = "version";
}