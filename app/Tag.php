<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function servers()
    {
        return $this->morphedByMany(Server::class, 'taggable');
    }

    public function notes()
    {
        return $this->morphMany(Note::class, 'notable');
    }
}
