<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";
    //lo que traes y solo mostramos en json
    protected $fillable=['name','id'];

    public function articles()
    {
    	return $this->hasMany('App\Article');
    }
    public function scopeSearchCategory($query, $name){
    	return $query->where('name','=',$name);
    }


}
