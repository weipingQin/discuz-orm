<?php

namespace Discuz\Portal;
use Discuz\Model;

class Rsscache extends Model
{
    protected $connection = "portal";
    protected $table = "rsscache";
    protected $primaryKey = "aid";
}