<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'refrence',
        'discount',
        'image',
    ];
    public function getFrenchPrice() {

        $price = $this-> price / 100 ; 
        
        return number_format($price , 2 , ',' , ' ' ). '€';
       
    }

    public function categories() {

        return $this->belongsToMany('App\Models\Category');

    }
}
