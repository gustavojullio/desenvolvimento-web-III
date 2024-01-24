<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    protected $table = 'jogadores';
    use HasFactory;

    public function time(){
        return $this->belongsTo(Time::class, 'times_id', 'id');
    }
}
