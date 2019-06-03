<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vpn extends Model
{
    public function servers()
    {
        return $this->belongsToMany(Server::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
