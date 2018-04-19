<?php

namespace Discuz\Portal;
use Discuz\Model;

class CategoryPermission extends Model
{
    protected $connection = "portal";
    protected $table = "category_permission";
    protected $primaryKey = "catid";
}