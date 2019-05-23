<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vpn extends Model
{
    public function servers()
    {
        return $this->belongsToMany(Server::class);
    }
}
