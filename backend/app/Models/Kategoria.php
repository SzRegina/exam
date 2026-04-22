<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategoria extends Model
{
    use HasFactory;

    protected $table = 'kategorias';

    protected $fillable = ['name'];

    public function activities()
    {
        return $this->hasMany(Activity::class, 'category_id');
    }
}