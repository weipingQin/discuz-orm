<?php

namespace Discuz\Home;
use Discuz\Model;

class PicModerate extends Model
{
    protected $connection = "home";
    protected $table = "pic_moderate";
    protected $primaryKey = "id";
}