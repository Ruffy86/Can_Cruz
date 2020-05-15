<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Room;

class Client extends Model
{
    use Notifiable;

    protected $fillable = [
        'name', 'phone', 'email'
    ];


    public function rooms()
    {
        return $this->belongsToMany(Room::class)->withPivot('From', 'To');;
    }
    public function currentRoom ()
    {
        return $this->rooms->last();
        //return $this->users->latest()->take(2);
    }
}
