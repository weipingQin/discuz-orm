<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleContent extends Model
{
    protected $connection = "portal";
    protected $table = "article_content";
    protected $primaryKey = "cid";
}