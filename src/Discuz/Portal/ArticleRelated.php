<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleRelated extends Model
{
    protected $connection = "portal";
    protected $table = "article_related";
    protected $primaryKey = "aid";
}