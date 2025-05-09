<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Games;
use App\Models\Developers;

class Developer extends Model{

    protected $fillable = [
        'name',
        'about',
    ];

    public function games(){return $this->hasMany(Games::class, 'developers_id');}

    public function publishers(){return $this->hasMany(Publishers::class, 'developers_id');}
}