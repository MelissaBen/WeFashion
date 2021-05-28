<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

      public function products() {

        return $this->belongsToMany('App\models\Product');

      }

      public function picture() {

        return $this->belongsToMany('App\Models\Picture');
       
      }

}
