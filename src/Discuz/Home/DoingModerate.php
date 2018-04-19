<?php

namespace Discuz\Home;
use Discuz\Model;

class DoingModerate extends Model
{
    protected $connection = "home";
    protected $table = "doing_moderate";
    protected $primaryKey = "id";
}