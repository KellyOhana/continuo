<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'platform',
        'genre',
        'status',
        'released_at',
    ];

    public function developer()
    {
        return $this->belongsToMany(Developer::class);
    }
    

    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }
    
}