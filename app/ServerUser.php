<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServerUser extends Model
{
    public function server()
    {
        return $this->belongsTo(Server::class);
    }
}
