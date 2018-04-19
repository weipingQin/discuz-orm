<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleCount extends Model
{
    protected $connection = "portal";
    protected $table = "article_count";
    protected $primaryKey = "aid";
}