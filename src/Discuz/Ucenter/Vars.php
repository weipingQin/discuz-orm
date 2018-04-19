<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class Vars extends Model
{
    protected $connection = "ucenter";
    protected $table = "vars";
    protected $primaryKey = "name";
}