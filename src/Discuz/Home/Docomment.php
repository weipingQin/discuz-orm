<?php

namespace Discuz\Home;
use Discuz\Model;

class Docomment extends Model
{
    protected $connection = "home";
    protected $table = "docomment";
    protected $primaryKey = "id";
}