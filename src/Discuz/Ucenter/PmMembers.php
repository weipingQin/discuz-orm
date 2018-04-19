<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class PmMembers extends Model
{
    protected $connection = "ucenter";
    protected $table = "pm_members";
    protected $primaryKey = "plid";
}