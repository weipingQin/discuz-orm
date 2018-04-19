<?php

namespace Discuz\Common;
use Discuz\Model;

class TemplatePermission extends Model
{
    protected $connection = "common";
    protected $table = "template_permission";
    protected $primaryKey = "targettplname";
}