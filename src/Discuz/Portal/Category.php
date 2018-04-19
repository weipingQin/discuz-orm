<?php

namespace Discuz\Portal;
use Discuz\Model;

class Category extends Model
{
    protected $connection = "portal";
    protected $table = "category";
    protected $primaryKey = "catid";
}