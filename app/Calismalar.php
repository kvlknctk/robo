<?php

namespace App;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;


class Calismalar extends Model
{
    use Resizable;


    public function images()
    {
        return $this->hasMany('App\Gallery', 'work_id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Kategoriler', 'category_id');
    }
}
