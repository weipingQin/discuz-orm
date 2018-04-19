<?php

namespace Discuz\Connect;
use Discuz\Model;

class Memberbindlog extends Model
{
    protected $connection = "connect";
    protected $table = "memberbindlog";
    protected $primaryKey = "mblid";
}