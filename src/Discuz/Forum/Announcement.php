<?php

namespace Discuz\Forum;
use Discuz\Model;

class Announcement extends Model
{
    protected $connection = "forum";
    protected $table = "announcement";
    protected $primaryKey = "id";
}