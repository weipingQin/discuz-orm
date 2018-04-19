<?php

namespace Discuz\Forum;
use Discuz\Model;

class Bbcode extends Model
{
    protected $connection = "forum";
    protected $table = "bbcode";
    protected $primaryKey = "id";
}