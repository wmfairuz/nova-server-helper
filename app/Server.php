<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    public function server_group()
    {
        return $this->belongsTo(ServerGroup::class);
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function vpns()
    {
        return $this->belongsToMany(Vpn::class);
    }

    public function server_users()
    {
        return $this->hasMany(ServerUser::class);
    }

    public function snippets()
    {
        return $this->hasMany(Snippet::class);
    }
}
