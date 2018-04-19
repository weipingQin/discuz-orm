<?php

namespace Discuz\Home;
use Discuz\Model;

class Notification extends Model
{
    protected $connection = "home";
    protected $table = "notification";
    protected $primaryKey = "id";
}