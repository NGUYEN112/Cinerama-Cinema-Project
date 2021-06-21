<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketPrice extends Model
{
    use HasFactory;
    

    public function format() {
        return $this->belongsTo('App\Models\FormatFilm');
    }
}