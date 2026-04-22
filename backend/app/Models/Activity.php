<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'status'];

    public function category()
    {
        return $this->belongsTo(Kategoria::class, 'category_id');
    }
}