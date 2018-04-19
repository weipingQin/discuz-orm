<?php

namespace Discuz\Common;
use Discuz\Model;

class TemplateBlock extends Model
{
    protected $connection = "common";
    protected $table = "template_block";
    protected $primaryKey = "targettplname";
}