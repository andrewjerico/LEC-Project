<?php

namespace App\Models;

use App\Models\Place;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';
    protected $guarded = ['id'];

    public function place(){
        return $this->hasMany(Place::class);
    }
}
