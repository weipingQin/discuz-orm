<?php

namespace Discuz\Ucenter;
use Discuz\Model;

class PmIndexes extends Model
{
    protected $connection = "ucenter";
    protected $table = "pm_indexes";
    protected $primaryKey = "pmid";
}