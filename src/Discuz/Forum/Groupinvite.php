<?php

namespace Discuz\Forum;
use Discuz\Model;

class Groupinvite extends Model
{
    protected $connection = "forum";
    protected $table = "groupinvite";
    protected $primaryKey = "fid";
}