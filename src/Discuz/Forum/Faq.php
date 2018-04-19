<?php

namespace Discuz\Forum;
use Discuz\Model;

class Faq extends Model
{
    protected $connection = "forum";
    protected $table = "faq";
    protected $primaryKey = "id";
}