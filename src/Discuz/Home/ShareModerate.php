<?php

namespace Discuz\Home;
use Discuz\Model;

class ShareModerate extends Model
{
    protected $connection = "home";
    protected $table = "share_moderate";
    protected $primaryKey = "id";
}