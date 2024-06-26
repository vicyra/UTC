<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
