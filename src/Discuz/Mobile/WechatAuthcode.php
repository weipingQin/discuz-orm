<?php

namespace Discuz\Mobile;
use Discuz\Model;

class WechatAuthcode extends Model
{
    protected $connection = "mobile";
    protected $table = "wechat_authcode";
    protected $primaryKey = "sid";
}