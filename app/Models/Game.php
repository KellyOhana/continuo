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
        'publisher_id',
        'developer_id',
    ];

    protected $casts = [
        'platform' => 'array',
        'genre' => 'array',
        'released_at' => 'datetime',
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