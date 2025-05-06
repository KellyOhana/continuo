<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Games;
use App\Models\Developers;

class Publisher extends Model{

    protected $fillable = [
        'name',
        'about',
    ];

    public function games(){return $this->hasMany(Games::class, 'publisher_id');}

    public function developers(){return $this->hasMany(Developers::class, 'publisher_id');}
}