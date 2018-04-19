<?php

namespace Discuz\Portal;
use Discuz\Model;

class Attachment extends Model
{
    protected $connection = "portal";
    protected $table = "attachment";
    protected $primaryKey = "attachid";
}