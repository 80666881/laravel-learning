<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    protected $fillable = ['title', 'content', 'published_at'];
    protected $dates = ['published_at'];
    //set Title(对应上面的title) Attribute
    public function setPublishedAtAttribute($date) {
        //会把传入的$date用carbon转化再存入数据库
        $year = date("Y",strtotime($date));
        $month = date("m",strtotime($date));
        $day = date("d",strtotime($date));
        $this->attributes['published_at'] = Carbon::createFromDate($year,$month,$day);
    }

    //scope关键字+函数名字(驼峰法)
    public function scopePublished($query){
       $query->where('published_at','<=',Carbon::now());
    }
}
