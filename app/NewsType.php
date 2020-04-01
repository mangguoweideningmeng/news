<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $table = 'newstype';

    protected $primaryKey = 'n_id';
    public $timestamps = false;
    protected $guarded=[];
}
