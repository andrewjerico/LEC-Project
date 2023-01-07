<?php

namespace App\Models;

use App\Models\Province;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Place extends Model
{
    use HasFactory;

    protected $table = 'places';
    protected $guarded = ['id'];

    public function province(){
        return $this->belongsTo(Province::class);
    }
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }
}
