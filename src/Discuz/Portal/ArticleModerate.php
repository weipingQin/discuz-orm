<?php

namespace Discuz\Portal;
use Discuz\Model;

class ArticleModerate extends Model
{
    protected $connection = "portal";
    protected $table = "article_moderate";
    protected $primaryKey = "id";
}