<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable=['judul','amount','cover','author','penerbit','tahun','cover'];

    public function getBorrowedAttribute()
    {
        return $this->borrowLogs()->borrowed()->count();
    }

    public function borrowLogs()
    {
        return $this->hasMany('App\BorrowLog');
    }

    public function getStockAttribute()
    {
        $borrowed = $this->borrowLogs()->borrowed()->count();

        $stock = $this->amount - $borrowed;

        return $stock;
    }
}
