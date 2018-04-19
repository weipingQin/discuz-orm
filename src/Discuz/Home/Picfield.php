<?php

namespace Discuz\Home;
use Discuz\Model;

class Picfield extends Model
{
    protected $connection = "home";
    protected $table = "picfield";
    protected $primaryKey = "picid";
}