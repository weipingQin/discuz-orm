<?php

namespace Discuz\Mobile;
use Discuz\Model;

class WechatMasssend extends Model
{
    protected $connection = "mobile";
    protected $table = "wechat_masssend";
    protected $primaryKey = "id";
}