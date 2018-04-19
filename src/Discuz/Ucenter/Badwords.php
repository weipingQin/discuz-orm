<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Badwords extends Model
{
    protected $connection = "ucenter";
    protected $table = "badwords";
    protected $primaryKey = "id";
}