<?php

namespace App\Models;

use App\Models\Entry;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;
    protected $fillable=['name'];
    public function entries(){
        return $this->belongsToMany(Entry::class);
    }
}
