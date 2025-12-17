<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    //make fillable so it can be filled by ramean and seeder

    protected $fillable = [
        'name',
        'slug'
    ];

    //define relations/access to other models with a function
    // public function protofolios(){
    //     return $this->hasMany(Portofolio::class);
    // }
}
