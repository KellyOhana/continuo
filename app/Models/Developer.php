<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Developer extends Model{

    protected $fillable = [
        'name',
        'about',
        'publisher_id',
    ];

    public function games(){return $this->hasMany(Game::class, 'developers_id');}

    public function publishers(){return $this->hasMany(Publisher::class, 'developers_id');}
}