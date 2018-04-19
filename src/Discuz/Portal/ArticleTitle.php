<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleTitle extends Model
{
    protected $connection = "portal";
    protected $table = "article_title";
    protected $primaryKey = "aid";
}