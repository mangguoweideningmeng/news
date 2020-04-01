<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // 指定表名
    protected $table = 'user';
    protected $primaryKey = 'id';
    // 关闭时间戳
    public $timestamps = false;
    // 黑名单
    protected $guarded = [];
}
