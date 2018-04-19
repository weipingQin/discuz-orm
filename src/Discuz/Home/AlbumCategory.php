<?php

namespace Discuz\Home;
use Discuz\Model;

class AlbumCategory extends Model
{
    protected $connection = "home";
    protected $table = "album_category";
    protected $primaryKey = "catid";
}