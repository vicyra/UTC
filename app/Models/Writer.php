<?php

namespace App\Models;

use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Writer extends Model
{
    use HasFactory;

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
