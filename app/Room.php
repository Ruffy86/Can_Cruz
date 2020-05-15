<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Room extends Model
{
    
    protected $fillable = [
        'name'
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
    
}
