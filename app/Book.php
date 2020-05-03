<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Book extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name', 'gender', 'rating', 'sales', 'released_at'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
    public function currentUser ()
    {
        return $this->users->last();
        //return $this->users->latest()->take(2);
    }
}
