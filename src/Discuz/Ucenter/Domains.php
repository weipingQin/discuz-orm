<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Domains extends Model
{
    protected $connection = "ucenter";
    protected $table = "domains";
    protected $primaryKey = "id";
}