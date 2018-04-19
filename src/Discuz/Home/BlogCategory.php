<?php

namespace Discuz\Home;
use Discuz\Model;

class BlogCategory extends Model
{
    protected $connection = "home";
    protected $table = "blog_category";
    protected $primaryKey = "catid";
}