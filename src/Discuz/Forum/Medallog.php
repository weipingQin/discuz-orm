<?php

namespace Discuz\Forum;
use Discuz\Model;

class Medallog extends Model
{
    protected $connection = "forum";
    protected $table = "medallog";
    protected $primaryKey = "id";
}