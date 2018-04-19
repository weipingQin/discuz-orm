<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class PmLists extends Model
{
    protected $connection = "ucenter";
    protected $table = "pm_lists";
    protected $primaryKey = "plid";
}