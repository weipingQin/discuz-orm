<?php

namespace Discuz\Forum;
use Discuz\Model;

class Forumrecommend extends Model
{
    protected $connection = "forum";
    protected $table = "forumrecommend";
    protected $primaryKey = "tid";
}