<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'category_id', 'writer_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function writer() {
        return $this->belongsTo(Writer::class);
    }
}
