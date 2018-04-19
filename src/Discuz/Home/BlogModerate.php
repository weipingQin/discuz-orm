<?php

namespace Discuz\Home;
use Discuz\Model;

class BlogModerate extends Model
{
    protected $connection = "home";
    protected $table = "blog_moderate";
    protected $primaryKey = "id";
}