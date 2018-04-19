<?php

namespace Discuz\Mobile;
use Discuz\Model;

class WechatResource extends Model
{
    protected $connection = "mobile";
    protected $table = "wechat_resource";
    protected $primaryKey = "id";
}