<?php

namespace App\Models;

use App\Models\Detail;
use App\Models\Writer;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function detail(){
        return $this->hasOne(Detail::class);
    }

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
}
