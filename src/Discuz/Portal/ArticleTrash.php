<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleTrash extends Model
{
    protected $connection = "portal";
    protected $table = "article_trash";
    protected $primaryKey = "aid";
}