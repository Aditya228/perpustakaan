<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable=['judul','amount','cover','author_id','penerbit','tahun','cover'];

    public function author()
    {
    	return $this->belongsTo('App\Author');
    }

    public function borrowLogs()
    {
    	return $this->hasMany('App\BorrowLog');
    }

    public function getStockAttribute()
    {
    	$borrowed = $this->borrowLogs()->count();
    	$stock = $this->amount - $borrowed;
    	return $stock;
    }
}
