<?php

namespace Discuz\Common;
use Discuz\Model;

class Invite extends Model
{
    protected $connection = "common";
    protected $table = "invite";
    protected $primaryKey = "id";
}