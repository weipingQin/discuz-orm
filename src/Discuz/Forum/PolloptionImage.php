<?php

namespace Discuz\Forum;
use Discuz\Model;

class PolloptionImage extends Model
{
    protected $connection = "forum";
    protected $table = "polloption_image";
    protected $primaryKey = "aid";
}