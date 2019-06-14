<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Snippet extends Model
{
    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
