<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerGroup extends Model
{
    public function servers()
    {
        return $this->hasMany(Server::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
