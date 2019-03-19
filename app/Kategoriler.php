<?php

namespace App;

use TCG\Voyager\Traits\Resizable;
use Illuminate\Database\Eloquent\Model;


class Kategoriler extends Model
{

    use Resizable;


    public function child()
    {
        return $this->hasMany('App\Kategoriler', 'parent_id');
    }

    public function parent()
    {

    }

    public function works()
    {
        return $this->hasMany('App\Calismalar', 'category_id');
    }
}
