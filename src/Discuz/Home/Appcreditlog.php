<?php

namespace Discuz\Home;
use Discuz\Model;

class Appcreditlog extends Model
{
    protected $connection = "home";
    protected $table = "appcreditlog";
    protected $primaryKey = "logid";
}