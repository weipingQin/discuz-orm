<?php

namespace Discuz\Security;
use Discuz\Model;

class Failedlog extends Model
{
    protected $connection = "security";
    protected $table = "failedlog";
    protected $primaryKey = "id";
}