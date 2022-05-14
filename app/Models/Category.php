<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    # one to Many
    public function cars(){
        return $this->hasMany(Cars::class);
    }

    # one to many iverse
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }

    # one to many
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }



}
