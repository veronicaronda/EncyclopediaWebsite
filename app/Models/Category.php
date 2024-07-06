<?php

namespace App\Models;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable=['name'];

    public function entries(){
       return $this->hasMany(Entry::class);
    }
}
