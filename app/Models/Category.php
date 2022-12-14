<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function rack(){
        return $this->belongsTo(Rack::class);
    }
    public function book(){
        return $this->hasMany(Book::class);
    }
}
